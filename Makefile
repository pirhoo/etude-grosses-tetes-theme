build:
	yarn run build:production

deploy: build deploy-git deploy-dist

# @see https://github.com/git-ftp/git-ftp
deploy-git:
	git ftp push

deploy-dist:
	echo "put -r dist" | sftp 2829886@sftp.sd5.gpaas.net:/vhosts/next.ajlgbt.info/htdocs/wp-content/themes/etude-grosses-tetes/
