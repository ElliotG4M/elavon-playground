<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\EPG;

use Gear4music\ElavonPlayground\V1\EPG\ElavonPlayground\TransactionsApi;
use Gear4music\ElavonPlayground\V1\EPG\Model\Blik;
use Gear4music\ElavonPlayground\V1\EPG\Model\FailureWrapper;
use Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency;
use Gear4music\ElavonPlayground\V1\EPG\Model\SaleTransaction;
use Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction;
use Gear4music\ElavonPlayground\V1\EPG\Model\Transaction;
use Gear4music\ElavonPlayground\V1\EPG\Model\TransactionType;
use GuzzleHttp\Promise\PromiseInterface;

class Client
{
    private TransactionsApi $transactionsApi;

    public function __construct(string $host, string $merchantID, string $secretKey)
    {
        $this->transactionsApi = new TransactionsApi(
            new \GuzzleHttp\Client(),
            Configuration::getDefaultConfiguration()
                ->setUsername($merchantID)
                ->setPassword($secretKey)
                ->setHost($host)
        );
    }

    /**
     * @param float $amount
     * @param string $currencyCode
     * @param string $blikCode
     * @param string $orderNumber
     * @param string $email
     * @return Transaction|FailureWrapper
     * @throws \Exception
     */
    public function createBlikTransaction(
        float  $amount, // Amount as float
        string $currencyCode,
        string $blikCode, // 6 digit Blik code
        string $orderNumber,
        string $email // customer email
    ): Transaction|FailureWrapper
    {
        $transaction = new SaleTransaction([
            'type' => TransactionType::SALE,
            'total' => new PositiveAmountAndCurrency([
                'amount' => $amount,
                'currency_code' => $currencyCode,
            ]),
            'order_reference' => $orderNumber,
            'shopper_interaction' => ShopperInteraction::ECOMMERCE,
            'shopper_email_address' => $email,
            'blik' => new Blik([
                'code' => $blikCode,
            ]),
            'do_capture' => true,
            'do_send_receipt' => true // Send email receipt to customer automatically
        ]);
        // For some reason the generated code overwrites this in the constructor with an invalid default value
        // Set it again here
        $transaction->setType(TransactionType::SALE);

        return $this->transactionsApi->createTransaction(
            $transaction
        );
    }

    public function createBlikTransactionAsync(
        float  $amount,
        string $currencyCode,
        string $blikCode,
        string $orderNumber,
        string $email // customer email
    ): PromiseInterface
    {
        $transaction = new SaleTransaction([
            'type' => TransactionType::SALE,
            'total' => new PositiveAmountAndCurrency([
                'amount' => $amount,
                'currency_code' => $currencyCode,
            ]),
            'order_reference' => $orderNumber,
            'shopper_interaction' => ShopperInteraction::ECOMMERCE,
            'shopper_email_address' => $email,
            'blik' => new Blik([
                'code' => $blikCode,
            ]),
            'do_capture' => true,
            'do_send_receipt' => true
        ]);
        // For some reason the generated code overwrites this in the constructor with an invalid default value
        // Set it again here
        $transaction->setType(TransactionType::SALE);

        return $this->transactionsApi->createTransactionAsync(
            $transaction
        );
    }

    /**
     * @param string $transactionId
     * @return Transaction
     * @throws \Exception
     */
    public function getTransaction(string $transactionId): Transaction
    {
        $response = $this->transactionsApi->retrieveTransaction($transactionId);
        if ($response instanceof FailureWrapper) {
            throw new \Exception(
                sprintf(
                    "Error: Code: %s, Desc: %s",
                    $response->getFailures()[0]->getCode(),
                    $response->getFailures()[0]->getDescription(),
                ),
                $response->getStatus()
            );
        } else {
            return $response;
        }
    }
}