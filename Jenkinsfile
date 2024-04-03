pipeline {
    agent any

    environment {
        REPO_NAME = "blaghmi97/symfonyapp" // DockerHub repository name
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
                    sh "cd /var/lib/jenkins/workspace/symfony_preprod"
                    sh "docker build -t ${REPO_NAME}:${env.BRANCH_NAME} ."
                    sh "sudo docker push ${REPO_NAME}:${env.BRANCH_NAME}"
                    
                  
                }
            }
        }

        stage('Deploy to Environment') {
            steps {
                script {
                    def composeFile = ''
                    if (env.BRANCH_NAME == 'main') {
                        composeFile = 'docker/docker-compose.prod.yml'
                    } else if (env.BRANCH_NAME == 'dev') {
                        composeFile = 'docker/docker-compose.dev.yml'
                    } else if (env.BRANCH_NAME == 'preprod') {
                        composeFile = 'docker/docker-compose.preprod.yml'
                    }

                    // Set the path to the Docker Compose file in the Jenkins workspace
                    def composeFilePath = "${env.WORKSPACE}/${composeFile}"

                    // Deploy the application
                    sh "WORKSPACE_DIR=${env.WORKSPACE} docker-compose -f ${composeFilePath} down"

                    sh "WORKSPACE_DIR=${env.WORKSPACE} docker-compose -f ${composeFilePath} -p ${env.BRANCH_NAME} up -d"

                }
            }
        }

        stage('Test') {
            steps {
               sh 'cd /var/lib/jenkins/workspace/symfony_preprod &&  phpunit --log-junit result.xml'

            }
        }


        stage('Clear Symfony Cache') {
            steps {
                script {
                    // Replace with your actual PHP container name
                    def phpContainerName = "symfony_app_${env.BRANCH_NAME}"

                    // Clear cache
                    sh "docker exec ${phpContainerName} php /var/www/bin/console cache:clear"
                }
            }
        }
        stage('Prepare Workspace') {
            steps {
                script {
                    // Adjust permissionss on Jenkins workspace
                    
                    sh "sudo chmod -R 777 /var/lib/jenkins/workspace/"
                }
            }
        }
    }
}
