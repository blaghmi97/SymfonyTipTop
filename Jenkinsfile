pipeline {
    agent any

    environment {
        REPO_NAME = "blaghmi97/symfonyapp" // DockerHub repository name
    }

    stages {
        stage('Prepare Workspace') {
            steps {
                script {
                    // Adjust permissions on Jenkins workspace
                    sh "sudo chown -R jenkins:jenkins ${env.WORKSPACE}"
                    sh "sudo chmod -R 755 ${env.WORKSPACE}"
                }
            }
        }

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
                    sh "WORKSPACE_DIR=${env.WORKSPACE} docker-compose -f ${composeFilePath} down --volumes"
                    sh "WORKSPACE_DIR=${env.WORKSPACE} docker-compose -f ${composeFilePath} -p ${env.BRANCH_NAME} up -d"
                }
            }
        }

        stage('Clear Symfony Cache') {
            steps {
                script {
                    // Replace with your actual PHP container name
                    def phpContainerName = 'symfony_app_main' // Adjust this to match your actual PHP container name

                    // Clear cache
                    sh "docker exec ${phpContainerName} php /var/www/bin/console cache:clear"
                }
            }
        }
    }
}
