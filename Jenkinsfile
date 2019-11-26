pipeline {
    agent { docker { image 'php73' } }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
            }
        }
    }
}