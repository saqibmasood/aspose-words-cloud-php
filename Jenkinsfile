def runtests(dockerImageVersion)
{
    dir(dockerImageVersion){
        try {
            stage('checkout'){
                checkout([$class: 'GitSCM', branches: [[name: '*/master']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '9d6c4dfa-042c-4ed1-81c7-9175179dddda', url: 'https://github.com/aspose-words-cloud/aspose-words-cloud-php.git/']]])
                withCredentials([usernamePassword(credentialsId: '6839cbe8-39fa-40c0-86ce-90706f0bae5d', passwordVariable: 'AppKey', usernameVariable: 'AppSid')]) {
					sh 'mkdir -p Settings'
                    sh 'echo "{\\"AppSid\\": \\"$AppSid\\",\\"AppKey\\": \\"$AppKey\\", \\"BaseUrl\\": \\"https://auckland-words-cloud-staging.dynabic.com\\"}" > Settings/servercreds.json'
                }
            }
            
            def testImage = docker.build("asposewordsphp:${dockerImageVersion}", "./docker/${dockerImageVersion}")
            
            testImage.inside {
                stage('build'){
                    sh "php composer.phar install --no-interaction"
					sh "mkdir testReports"
					try {
						sh "php -dmemory_limit=1G ./vendor/bin/phpcs --report=checkstyle --report-file=testReports/codeStyleErrors ./src || exit 0"   
					} finally {
						checkstyle pattern: 'testReports/codeStyleErrors'
					}					
                }
            
                stage('tests'){   
					try {
						sh "php vendor/bin/phpunit -c phpunit.xml"
					} finally {
						junit 'testReports/logfile.xml'
					}
                }
            
                stage('bdd-tests'){
					try {
						//sh "npm run gulp cucumber"
					} finally {
						//cucumber 'reports/**.json'
					}
                }
            }        
        } finally {                       
            deleteDir()
        }
    }
}

node('billing-qa-ubuntu-16.04.4') {
    runtests("latest")
	runtests("5.6")          
}