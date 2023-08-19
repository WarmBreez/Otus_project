#!/bin/bash
date = 'date +%Y%m%d'
mysqladmin --user=root --password=neojidanno_1989Aa stop-slave
mysqldump --user=root --password=neojidanno_1989Aa --lock-all-tables \
          --all-databases > /home/alex/backups/backup-${date}.sql
mysqladmin --user=root --password=neojidanno_1989Aa start-slave
