alias brc="source ~/.bashrc"

home()
{
	cd /c;
}

#change to your dir location
alias xampp="home && cd xampp/htdocs"
alias project3="cd xampp/htdocs/project3"

alias gs="git status"
alias co="git checkout"
alias br="git branch"
alias pull="git pull"
alias push="git push"

alias rmwork="rm .idea/workspace.xml && git add .idea/workspace.xml && git commit -m 'removed workspace.xml'"

