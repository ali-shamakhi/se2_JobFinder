find . -type d -exec chmod 0755 {} \;
find . -type f -exec chmod 0644 {} \;
rm -rf app/cache/*
rm -rf app/logs/*
