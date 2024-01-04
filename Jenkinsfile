pipeline {
    agent any

    environment {
        REPO_NAME = "blaghmi97/symfonyapp"
    }

    stages {
        stage('Checkout Code') {
            steps {
                checkout scm
            }
        }

        stage('Build and Push Docker Image') {
            steps {
                script {
                    sh "docker build -t ${REPO_NAME}:${env.BRANCH_NAME} ."
                    sh "sudo docker push ${REPO_NAME}:${env.BRANCH_NAME}"
                }
            }
        }

        stage('Deploy to Environment') {
            steps {
                script {
                    def composeFile = getComposeFile(env.BRANCH_NAME)
                    def composeFilePath = "${env.WORKSPACE}/${composeFile}"

                    sh "WORKSPACE_DIR=${env.WORKSPACE} docker-compose -f ${composeFilePath} down --volumes"
                    sh "WORKSPACE_DIR=${env.WORKSPACE} docker-compose -f ${composeFilePath} -p ${env.BRANCH_NAME} up -d"
                }
            }
        }

        stage('Clear Symfony Cache') {
            steps {
                script {
                    def phpContainerName = "symfony_app_${env.BRANCH_NAME}"
                    sh "docker exec ${phpContainerName} php /var/www/bin/console cache:clear"
                }
            }
        }

        stage('Prepare Workspace') {
            steps {
                script {
                    sh "sudo chmod -R 777 /var/lib/jenkins/workspace/"
                }
            }
        }

        stage('SonarQube analysis') {
            steps {
                script {
                    def scannerHome = tool 'SonarQube Scanner 2.8'
                    withSonarQubeEnv('SonarQube Scanner') {
                        sh "${scannerHome}/bin/sonar-scanner"
                    }
                }
            }
        }
    }
}
