pipeline {
    agent any
     triggers {
        githubPush()  // enables webhook trigger
    }
    stages {
        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/saymon005/saymon.git'
            }
        }

        stage('Deploy to Apache') {
            steps {
                sh '''
                    sudo rm -rf /var/www/saymon.moheshkhalitribune.com/*
                    sudo cp -r * /var/www/saymon.moheshkhalitribune.com/
                '''
            }
        }
    }
}
