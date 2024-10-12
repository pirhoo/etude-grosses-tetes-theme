build:
	yarn run build:production

deploy: deploy-git deploy-dist

# @see https://github.com/git-ftp/git-ftp
deploy-init:
	git config git-ftp.url "sftp://sftp.sd5.gpaas.net/vhosts/next.ajlgbt.info/htdocs/wp-content/themes/etude-grosses-tetes/"
	git config git-ftp.user 2829886
	git ftp init

deploy-git:
	git ftp push

deploy-dist: build
	echo "put -r public" | sftp 2829886@sftp.sd5.gpaas.net:/vhosts/next.ajlgbt.info/htdocs/wp-content/themes/etude-grosses-tetes/

deploy-vendor:
	echo "put -r vendor" | sftp 2829886@sftp.sd5.gpaas.net:/vhosts/next.ajlgbt.info/htdocs/wp-content/themes/etude-grosses-tetes/

webpack:
	yarn run start
