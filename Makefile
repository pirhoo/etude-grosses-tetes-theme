build:
	yarn run build:production

deploy: deploy-git deploy-dist

# @see https://github.com/git-ftp/git-ftp
deploy-git:
	git ftp push

deploy-dist: build
	echo "put -r dist" | sftp 2829886@sftp.sd5.gpaas.net:/vhosts/next.ajlgbt.info/htdocs/wp-content/themes/etude-grosses-tetes/

deploy-vendor:
	echo "put -r vendor" | sftp 2829886@sftp.sd5.gpaas.net:/vhosts/next.ajlgbt.info/htdocs/wp-content/themes/etude-grosses-tetes/
