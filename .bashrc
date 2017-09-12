alias brc="source ~/.bashrc"

home()
{
	cd /c;
}

#change to your dir location
alias xampp="home && cd xampp/htdocs"

alias gs="git status"
alias co="git checkout"
alias br="git branch"

alias rmwork="rm .idea/workspace.xml && git add .idea/workspace.xml && git commit -m 'removed workspace.xml'"

#change to your dir location
alias project3="cd xampp/htdocs/project3"