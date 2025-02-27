FROM europe-docker.pkg.dev/g4m-docker-images/g4m/php/unified/php-apache-8.4.3:v2.3.1

# DEV app mode, ENV vars
ENV G4MAPP_CFG_VARS /app/.env
ENV G4MAPP_SCRIPT /app/vendor/gear4music/php-japi-extended/public/index.php

# Or, for custom entrypoint
# ENV G4MAPP_SCRIPT /app/public/index.php

# Prevent `Operation not supported: could not create accept mutex` error on M1 Mac.
RUN echo "Mutex posixsem" >> /etc/apache2/apache2.conf

EXPOSE 80 443