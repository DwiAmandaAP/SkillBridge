<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [

            /*
            |--------------------------------------------------------------------------
            | PROGRAMMING LANGUAGES
            |--------------------------------------------------------------------------
            */
            ['code' => 'javascript', 'name' => 'JavaScript', 'category' => 'technical', 'aliases' => [
                'JS', 'ECMAScript', 'ES6', 'ES2015'
            ]],

            ['code' => 'typescript', 'name' => 'TypeScript', 'category' => 'technical', 'aliases' => [
                'TS'
            ]],

            ['code' => 'python', 'name' => 'Python', 'category' => 'technical', 'aliases' => [
                'Python3', 'Python 3', 'Py'
            ]],

            ['code' => 'java', 'name' => 'Java', 'category' => 'technical', 'aliases' => [
                'Java SE', 'Java EE', 'J2EE', 'JVM'
            ]],

            ['code' => 'kotlin', 'name' => 'Kotlin', 'category' => 'technical', 'aliases' => [
                'Kotlin Android'
            ]],

            ['code' => 'c', 'name' => 'C', 'category' => 'technical', 'aliases' => [
                'C Programming'
            ]],

            ['code' => 'cpp', 'name' => 'C++', 'category' => 'technical', 'aliases' => [
                'CPP', 'C Plus Plus'
            ]],

            ['code' => 'csharp', 'name' => 'C#', 'category' => 'technical', 'aliases' => [
                'C Sharp', 'CSharp'
            ]],

            ['code' => 'dotnet', 'name' => '.NET', 'category' => 'technical', 'aliases' => [
                '.NET Core',
                'ASP.NET',
                'ASP.NET Core',
                'DotNet',
                'Microsoft .NET',
                'Microsoft DotNet'
            ]],

            ['code' => 'php', 'name' => 'PHP', 'category' => 'technical', 'aliases' => [
                'PHP 7', 'PHP 8', 'PHP8', 'Hypertext Preprocessor'
            ]],

            ['code' => 'golang', 'name' => 'Go', 'category' => 'technical', 'aliases' => [
                'Golang', 'Go Programming', 'GoLang'
            ]],

            ['code' => 'ruby', 'name' => 'Ruby', 'category' => 'technical', 'aliases' => [
                'Ruby Programming'
            ]],

            ['code' => 'rust', 'name' => 'Rust', 'category' => 'technical', 'aliases' => [
                'Rust Programming'
            ]],

            ['code' => 'dart', 'name' => 'Dart', 'category' => 'technical', 'aliases' => [
                'Dart Programming'
            ]],

            ['code' => 'swift', 'name' => 'Swift', 'category' => 'technical', 'aliases' => [
                'Swift iOS'
            ]],

            ['code' => 'r_language', 'name' => 'R', 'category' => 'technical', 'aliases' => [
                'R Programming', 'R Language'
            ]],

            ['code' => 'matlab', 'name' => 'MATLAB', 'category' => 'technical', 'aliases' => [
                'Matlab Programming'
            ]],


            /*
            |--------------------------------------------------------------------------
            | WEB DEVELOPMENT
            |--------------------------------------------------------------------------
            */
            ['code' => 'html_css', 'name' => 'HTML & CSS', 'category' => 'technical', 'aliases' => [
                'HTML5', 'CSS3', 'Web Fundamentals'
            ]],

            ['code' => 'sass_scss', 'name' => 'Sass / SCSS', 'category' => 'technical', 'aliases' => [
                'SASS', 'SCSS'
            ]],

            ['code' => 'bootstrap', 'name' => 'Bootstrap', 'category' => 'technical', 'aliases' => [
                'Bootstrap CSS'
            ]],

            ['code' => 'tailwind_css', 'name' => 'Tailwind CSS', 'category' => 'technical', 'aliases' => [
                'Tailwind', 'TailwindCSS'
            ]],

            ['code' => 'react', 'name' => 'React', 'category' => 'technical', 'aliases' => [
                'ReactJS', 'React.js'
            ]],

            ['code' => 'nextjs', 'name' => 'Next.js', 'category' => 'technical', 'aliases' => [
                'NextJS', 'Next JS'
            ]],

            ['code' => 'vuejs', 'name' => 'Vue.js', 'category' => 'technical', 'aliases' => [
                'Vue', 'VueJS', 'Vue 3', 'Vue3'
            ]],

            ['code' => 'nuxtjs', 'name' => 'Nuxt.js', 'category' => 'technical', 'aliases' => [
                'Nuxt', 'NuxtJS'
            ]],

            ['code' => 'angular', 'name' => 'Angular', 'category' => 'technical', 'aliases' => [
                'AngularJS', 'Angular 2+'
            ]],

            ['code' => 'svelte', 'name' => 'Svelte', 'category' => 'technical', 'aliases' => [
                'SvelteJS'
            ]],

            ['code' => 'jquery', 'name' => 'jQuery', 'category' => 'technical', 'aliases' => [
                'JQuery'
            ]],

            ['code' => 'nodejs', 'name' => 'Node.js', 'category' => 'technical', 'aliases' => [
                'Node', 'NodeJS'
            ]],

            ['code' => 'expressjs', 'name' => 'Express.js', 'category' => 'technical', 'aliases' => [
                'Express', 'ExpressJS'
            ]],

            ['code' => 'nestjs', 'name' => 'NestJS', 'category' => 'technical', 'aliases' => [
                'Nest.js', 'Nest JS'
            ]],

            ['code' => 'laravel', 'name' => 'Laravel', 'category' => 'technical', 'aliases' => [
                'Laravel Framework', 'PHP Laravel'
            ]],

            ['code' => 'symfony', 'name' => 'Symfony', 'category' => 'technical', 'aliases' => [
                'Symfony PHP'
            ]],

            ['code' => 'codeigniter', 'name' => 'CodeIgniter', 'category' => 'technical', 'aliases' => [
                'CI', 'CodeIgniter PHP'
            ]],

            ['code' => 'spring_boot', 'name' => 'Spring Boot', 'category' => 'technical', 'aliases' => [
                'Spring', 'Spring Framework', 'SpringBoot'
            ]],

            ['code' => 'aspnet', 'name' => 'ASP.NET', 'category' => 'technical', 'aliases' => [
                'ASP.NET Core', 'ASP Net', 'ASPNet'
            ]],


            /*
            |--------------------------------------------------------------------------
            | API & SOFTWARE ARCHITECTURE
            |--------------------------------------------------------------------------
            */
            ['code' => 'rest_api', 'name' => 'RESTful API', 'category' => 'technical', 'aliases' => [
                'REST API', 'REST', 'RESTful Services', 'Web Services'
            ]],

            ['code' => 'graphql', 'name' => 'GraphQL', 'category' => 'technical', 'aliases' => [
                'Graph QL'
            ]],

            ['code' => 'grpc', 'name' => 'gRPC', 'category' => 'technical', 'aliases' => [
                'GRPC', 'Google RPC'
            ]],

            ['code' => 'microservices', 'name' => 'Microservices', 'category' => 'technical', 'aliases' => [
                'Microservice Architecture', 'Microservice'
            ]],

            ['code' => 'software_architecture', 'name' => 'Software Architecture', 'category' => 'technical', 'aliases' => [
                'System Architecture', 'Application Architecture'
            ]],

            ['code' => 'design_patterns', 'name' => 'Design Patterns', 'category' => 'technical', 'aliases' => [
                'Software Design Patterns', 'OOP Design Patterns'
            ]],

            ['code' => 'object_oriented_programming', 'name' => 'Object-Oriented Programming', 'category' => 'technical', 'aliases' => [
                'OOP', 'Object Oriented Programming'
            ]],

            ['code' => 'functional_programming', 'name' => 'Functional Programming', 'category' => 'technical', 'aliases' => [
                'FP'
            ]],


            /*
            |--------------------------------------------------------------------------
            | DATABASE
            |--------------------------------------------------------------------------
            */
            ['code' => 'sql', 'name' => 'SQL', 'category' => 'technical', 'aliases' => [
                'Structured Query Language'
            ]],

            ['code' => 'mysql', 'name' => 'MySQL', 'category' => 'technical', 'aliases' => [
                'MySQL DB', 'MySQL Database'
            ]],

            ['code' => 'postgresql', 'name' => 'PostgreSQL', 'category' => 'technical', 'aliases' => [
                'Postgres', 'PostgreSQL DB'
            ]],

            ['code' => 'mariadb', 'name' => 'MariaDB', 'category' => 'technical', 'aliases' => [
                'Maria DB'
            ]],

            ['code' => 'mssql', 'name' => 'Microsoft SQL Server', 'category' => 'technical', 'aliases' => [
                'SQL Server', 'MS SQL', 'MSSQL'
            ]],

            ['code' => 'oracle_database', 'name' => 'Oracle Database', 'category' => 'technical', 'aliases' => [
                'Oracle DB', 'Oracle SQL'
            ]],

            ['code' => 'sqlite', 'name' => 'SQLite', 'category' => 'technical', 'aliases' => [
                'SQLite3'
            ]],

            ['code' => 'mongodb', 'name' => 'MongoDB', 'category' => 'technical', 'aliases' => [
                'Mongo DB', 'NoSQL MongoDB'
            ]],

            ['code' => 'redis', 'name' => 'Redis', 'category' => 'technical', 'aliases' => [
                'Redis Cache'
            ]],

            ['code' => 'elasticsearch', 'name' => 'Elasticsearch', 'category' => 'technical', 'aliases' => [
                'Elastic Search', 'ELK Elasticsearch'
            ]],

            ['code' => 'database_design', 'name' => 'Database Design', 'category' => 'technical', 'aliases' => [
                'Database Architecture', 'Relational Database Design'
            ]],

            ['code' => 'database_administration', 'name' => 'Database Administration', 'category' => 'technical', 'aliases' => [
                'DBA', 'Database Administrator'
            ]],

            ['code' => 'data_warehouse', 'name' => 'Data Warehouse', 'category' => 'technical', 'aliases' => [
                'Data Warehousing', 'DWH'
            ]],


            /*
            |--------------------------------------------------------------------------
            | MOBILE DEVELOPMENT
            |--------------------------------------------------------------------------
            */
            ['code' => 'flutter', 'name' => 'Flutter', 'category' => 'technical', 'aliases' => [
                'Flutter SDK'
            ]],

            ['code' => 'react_native', 'name' => 'React Native', 'category' => 'technical', 'aliases' => [
                'RN', 'React Mobile'
            ]],

            ['code' => 'android_development', 'name' => 'Android Development', 'category' => 'technical', 'aliases' => [
                'Android Developer', 'Android SDK'
            ]],

            ['code' => 'ios_development', 'name' => 'iOS Development', 'category' => 'technical', 'aliases' => [
                'iOS Developer', 'Apple iOS Development'
            ]],

            ['code' => 'jetpack_compose', 'name' => 'Jetpack Compose', 'category' => 'technical', 'aliases' => [
                'Android Jetpack Compose'
            ]],


            /*
            |--------------------------------------------------------------------------
            | DEVOPS / CLOUD / INFRASTRUCTURE
            |--------------------------------------------------------------------------
            */
            ['code' => 'git', 'name' => 'Git', 'category' => 'technical', 'aliases' => [
                'Git VCS', 'Version Control'
            ]],

            ['code' => 'github', 'name' => 'GitHub', 'category' => 'technical', 'aliases' => [
                'Github'
            ]],

            ['code' => 'gitlab', 'name' => 'GitLab', 'category' => 'technical', 'aliases' => [
                'Git Lab'
            ]],

            ['code' => 'ci_cd', 'name' => 'CI/CD', 'category' => 'technical', 'aliases' => [
                'Continuous Integration',
                'Continuous Deployment',
                'Continuous Delivery'
            ]],

            ['code' => 'github_actions', 'name' => 'GitHub Actions', 'category' => 'technical', 'aliases' => [
                'Github Actions'
            ]],

            ['code' => 'jenkins', 'name' => 'Jenkins', 'category' => 'technical', 'aliases' => [
                'Jenkins CI'
            ]],

            ['code' => 'docker', 'name' => 'Docker', 'category' => 'technical', 'aliases' => [
                'Docker Container', 'Containerization'
            ]],

            ['code' => 'kubernetes', 'name' => 'Kubernetes', 'category' => 'technical', 'aliases' => [
                'K8s', 'K8'
            ]],

            ['code' => 'terraform', 'name' => 'Terraform', 'category' => 'technical', 'aliases' => [
                'Infrastructure as Code', 'IaC'
            ]],

            ['code' => 'ansible', 'name' => 'Ansible', 'category' => 'technical', 'aliases' => [
                'Ansible Automation'
            ]],

            ['code' => 'aws', 'name' => 'Amazon Web Services (AWS)', 'category' => 'technical', 'aliases' => [
                'AWS Cloud', 'Amazon Cloud', 'Amazon Web Services'
            ]],

            ['code' => 'azure', 'name' => 'Microsoft Azure', 'category' => 'technical', 'aliases' => [
                'Azure Cloud', 'MS Azure'
            ]],

            ['code' => 'google_cloud', 'name' => 'Google Cloud Platform (GCP)', 'category' => 'technical', 'aliases' => [
                'GCP', 'Google Cloud'
            ]],

            ['code' => 'linux', 'name' => 'Linux Administration', 'category' => 'technical', 'aliases' => [
                'Linux OS', 'Ubuntu', 'CentOS', 'Red Hat Linux'
            ]],

            ['code' => 'bash', 'name' => 'Bash / Shell Scripting', 'category' => 'technical', 'aliases' => [
                'Bash Scripting', 'Shell Script', 'Shell Scripting'
            ]],

            ['code' => 'nginx', 'name' => 'Nginx', 'category' => 'technical', 'aliases' => [
                'NGINX', 'Nginx Web Server'
            ]],

            ['code' => 'apache', 'name' => 'Apache HTTP Server', 'category' => 'technical', 'aliases' => [
                'Apache', 'Apache Web Server'
            ]],


            /*
            |--------------------------------------------------------------------------
            | NETWORKING
            |--------------------------------------------------------------------------
            */
            ['code' => 'networking', 'name' => 'Computer Networking', 'category' => 'technical', 'aliases' => [
                'Computer Network', 'Jaringan Komputer'
            ]],

            ['code' => 'tcp_ip', 'name' => 'TCP/IP', 'category' => 'technical', 'aliases' => [
                'TCP IP', 'Internet Protocol Suite'
            ]],

            ['code' => 'dns', 'name' => 'DNS', 'category' => 'technical', 'aliases' => [
                'Domain Name System'
            ]],

            ['code' => 'dhcp', 'name' => 'DHCP', 'category' => 'technical', 'aliases' => [
                'Dynamic Host Configuration Protocol'
            ]],

            ['code' => 'vpn', 'name' => 'VPN', 'category' => 'technical', 'aliases' => [
                'Virtual Private Network'
            ]],

            ['code' => 'routing_switching', 'name' => 'Routing & Switching', 'category' => 'technical', 'aliases' => [
                'Routing', 'Switching', 'Network Routing'
            ]],

            ['code' => 'cisco', 'name' => 'Cisco Networking', 'category' => 'technical', 'aliases' => [
                'Cisco Networks', 'Cisco Router', 'Cisco Switch', 'Cisco IOS'
            ]],

            ['code' => 'cisco_ccna', 'name' => 'Cisco CCNA', 'category' => 'technical', 'aliases' => [
                'CCNA', 'Cisco Certified Network Associate'
            ]],

            ['code' => 'network_monitoring', 'name' => 'Network Monitoring', 'category' => 'technical', 'aliases' => [
                'Network Management', 'Network Monitoring Tools'
            ]],

            ['code' => 'load_balancing', 'name' => 'Load Balancing', 'category' => 'technical', 'aliases' => [
                'Load Balancer', 'Load Balancing Architecture'
            ]],


            /*
            |--------------------------------------------------------------------------
            | CYBERSECURITY
            |--------------------------------------------------------------------------
            */
            ['code' => 'cybersecurity', 'name' => 'Cybersecurity', 'category' => 'technical', 'aliases' => [
                'Cyber Security', 'Information Security', 'InfoSec'
            ]],

            ['code' => 'network_security', 'name' => 'Network Security', 'category' => 'technical', 'aliases' => [
                'Network Security Engineering'
            ]],

            ['code' => 'firewall', 'name' => 'Firewall', 'category' => 'technical', 'aliases' => [
                'Network Firewall', 'Firewall Configuration', 'Firewall Management'
            ]],

            ['code' => 'penetration_testing', 'name' => 'Penetration Testing', 'category' => 'technical', 'aliases' => [
                'Pen Testing', 'Pentest', 'Penetration Test'
            ]],

            ['code' => 'ethical_hacking', 'name' => 'Ethical Hacking', 'category' => 'technical', 'aliases' => [
                'Ethical Hacker', 'White Hat Hacking'
            ]],

            ['code' => 'vulnerability_assessment', 'name' => 'Vulnerability Assessment', 'category' => 'technical', 'aliases' => [
                'Vulnerability Scanning', 'Vulnerability Management'
            ]],

            ['code' => 'security_operations', 'name' => 'Security Operations', 'category' => 'technical', 'aliases' => [
                'SOC', 'Security Operations Center'
            ]],

            ['code' => 'siem', 'name' => 'SIEM', 'category' => 'technical', 'aliases' => [
                'Security Information and Event Management'
            ]],

            ['code' => 'ids_ips', 'name' => 'IDS / IPS', 'category' => 'technical', 'aliases' => [
                'Intrusion Detection System',
                'Intrusion Prevention System',
                'IDS',
                'IPS'
            ]],

            ['code' => 'cryptography', 'name' => 'Cryptography', 'category' => 'technical', 'aliases' => [
                'Encryption', 'Data Encryption'
            ]],

            ['code' => 'iam', 'name' => 'Identity & Access Management', 'category' => 'technical', 'aliases' => [
                'IAM', 'Identity Management', 'Access Management'
            ]],

            ['code' => 'owasp', 'name' => 'OWASP', 'category' => 'technical', 'aliases' => [
                'OWASP Top 10', 'Web Application Security'
            ]],

            ['code' => 'security_audit', 'name' => 'Security Audit', 'category' => 'technical', 'aliases' => [
                'Information Security Audit', 'Cybersecurity Audit'
            ]],


            /*
            |--------------------------------------------------------------------------
            | SOFTWARE QA / TESTING
            |--------------------------------------------------------------------------
            */
            ['code' => 'software_testing', 'name' => 'Software Testing', 'category' => 'technical', 'aliases' => [
                'QA Testing', 'Software QA', 'Quality Assurance'
            ]],

            ['code' => 'manual_testing', 'name' => 'Manual Testing', 'category' => 'technical', 'aliases' => [
                'Manual QA', 'Manual Software Testing'
            ]],

            ['code' => 'automation_testing', 'name' => 'Test Automation', 'category' => 'technical', 'aliases' => [
                'QA Automation', 'Automated Testing', 'Automation Testing'
            ]],

            ['code' => 'selenium', 'name' => 'Selenium', 'category' => 'technical', 'aliases' => [
                'Selenium WebDriver'
            ]],

            ['code' => 'cypress', 'name' => 'Cypress', 'category' => 'technical', 'aliases' => [
                'Cypress Testing'
            ]],

            ['code' => 'playwright', 'name' => 'Playwright', 'category' => 'technical', 'aliases' => [
                'Playwright Testing'
            ]],

            ['code' => 'postman', 'name' => 'Postman', 'category' => 'technical', 'aliases' => [
                'Postman API Testing'
            ]],

            ['code' => 'unit_testing', 'name' => 'Unit Testing', 'category' => 'technical', 'aliases' => [
                'Unit Test', 'Unit Tests'
            ]],

            ['code' => 'integration_testing', 'name' => 'Integration Testing', 'category' => 'technical', 'aliases' => [
                'Integration Test'
            ]],


            /*
            |--------------------------------------------------------------------------
            | DATA / ANALYTICS
            |--------------------------------------------------------------------------
            */
            ['code' => 'data_analysis', 'name' => 'Data Analysis', 'category' => 'technical', 'aliases' => [
                'Data Analytics', 'Data Analyst'
            ]],

            ['code' => 'excel', 'name' => 'Microsoft Excel', 'category' => 'technical', 'aliases' => [
                'Excel', 'MS Excel', 'Microsoft Office Excel'
            ]],

            ['code' => 'powerbi', 'name' => 'Power BI', 'category' => 'technical', 'aliases' => [
                'PowerBI', 'Microsoft Power BI'
            ]],

            ['code' => 'tableau', 'name' => 'Tableau', 'category' => 'technical', 'aliases' => [
                'Tableau BI'
            ]],

            ['code' => 'data_visualization', 'name' => 'Data Visualization', 'category' => 'technical', 'aliases' => [
                'Data Viz', 'Data Visualisation'
            ]],

            ['code' => 'etl', 'name' => 'ETL', 'category' => 'technical', 'aliases' => [
                'Extract Transform Load',
                'Extract Transform and Load',
                'Data Pipeline',
                'Data Pipelines'
            ]],

            ['code' => 'data_engineering', 'name' => 'Data Engineering', 'category' => 'technical', 'aliases' => [
                'Data Engineer', 'Data Engineering'
            ]],

            ['code' => 'apache_spark', 'name' => 'Apache Spark', 'category' => 'technical', 'aliases' => [
                'Spark', 'PySpark'
            ]],

            ['code' => 'apache_kafka', 'name' => 'Apache Kafka', 'category' => 'technical', 'aliases' => [
                'Kafka', 'Kafka Streaming'
            ]],


            /*
            |--------------------------------------------------------------------------
            | ARTIFICIAL INTELLIGENCE / MACHINE LEARNING
            |--------------------------------------------------------------------------
            */
            ['code' => 'artificial_intelligence', 'name' => 'Artificial Intelligence', 'category' => 'technical', 'aliases' => [
                'AI', 'Artificial Intelligence Engineering'
            ]],

            ['code' => 'machine_learning', 'name' => 'Machine Learning', 'category' => 'technical', 'aliases' => [
                'ML', 'Machine Learning Engineering'
            ]],

            ['code' => 'deep_learning', 'name' => 'Deep Learning', 'category' => 'technical', 'aliases' => [
                'Deep Neural Networks', 'DL'
            ]],

            ['code' => 'tensorflow', 'name' => 'TensorFlow', 'category' => 'technical', 'aliases' => [
                'TensorFlow Framework'
            ]],

            ['code' => 'pytorch', 'name' => 'PyTorch', 'category' => 'technical', 'aliases' => [
                'Torch', 'PyTorch Framework'
            ]],

            ['code' => 'scikit_learn', 'name' => 'Scikit-learn', 'category' => 'technical', 'aliases' => [
                'Sklearn', 'Scikit Learn'
            ]],

            ['code' => 'nlp', 'name' => 'Natural Language Processing', 'category' => 'technical', 'aliases' => [
                'NLP', 'Natural Language Processing'
            ]],

            ['code' => 'computer_vision', 'name' => 'Computer Vision', 'category' => 'technical', 'aliases' => [
                'CV', 'Image Processing', 'Computer Vision AI'
            ]],

            ['code' => 'generative_ai', 'name' => 'Generative AI', 'category' => 'technical', 'aliases' => [
                'GenAI', 'Generative Artificial Intelligence'
            ]],

            ['code' => 'llm', 'name' => 'Large Language Models', 'category' => 'technical', 'aliases' => [
                'LLM', 'Large Language Model', 'Language Models'
            ]],

            ['code' => 'rag', 'name' => 'Retrieval-Augmented Generation', 'category' => 'technical', 'aliases' => [
                'RAG', 'Retrieval Augmented Generation'
            ]],

            ['code' => 'prompt_engineering', 'name' => 'Prompt Engineering', 'category' => 'technical', 'aliases' => [
                'Prompt Design', 'AI Prompt Engineering'
            ]],

            ['code' => 'vector_database', 'name' => 'Vector Database', 'category' => 'technical', 'aliases' => [
                'Vector DB', 'Vector Database'
            ]],

            ['code' => 'pinecone', 'name' => 'Pinecone', 'category' => 'technical', 'aliases' => [
                'Pinecone Vector Database'
            ]],

            ['code' => 'embeddings', 'name' => 'Vector Embeddings', 'category' => 'technical', 'aliases' => [
                'Embeddings', 'Text Embeddings', 'AI Embeddings'
            ]],

            ['code' => 'mlops', 'name' => 'MLOps', 'category' => 'technical', 'aliases' => [
                'Machine Learning Operations', 'ML Operations'
            ]],

            ['code' => 'model_deployment', 'name' => 'Machine Learning Model Deployment', 'category' => 'technical', 'aliases' => [
                'ML Deployment', 'Model Serving', 'AI Model Deployment'
            ]],


            /*
            |--------------------------------------------------------------------------
            | UI / UX
            |--------------------------------------------------------------------------
            */
            ['code' => 'figma', 'name' => 'Figma', 'category' => 'technical', 'aliases' => [
                'Figma Design', 'Figma Prototyping'
            ]],

            ['code' => 'ui_design', 'name' => 'UI Design', 'category' => 'technical', 'aliases' => [
                'User Interface Design', 'Interface Design'
            ]],

            ['code' => 'ux_design', 'name' => 'UX Design', 'category' => 'technical', 'aliases' => [
                'User Experience Design'
            ]],

            ['code' => 'user_research', 'name' => 'User Research', 'category' => 'technical', 'aliases' => [
                'UX Research', 'User Testing'
            ]],

            ['code' => 'wireframing', 'name' => 'Wireframing', 'category' => 'technical', 'aliases' => [
                'Wireframe'
            ]],

            ['code' => 'prototyping', 'name' => 'Prototyping', 'category' => 'technical', 'aliases' => [
                'UI Prototyping', 'UX Prototyping'
            ]],


            /*
            |--------------------------------------------------------------------------
            | IT SUPPORT / SYSTEM ADMINISTRATION
            |--------------------------------------------------------------------------
            */
            ['code' => 'it_support', 'name' => 'IT Support', 'category' => 'technical', 'aliases' => [
                'IT Helpdesk', 'Help Desk', 'Technical Support'
            ]],

            ['code' => 'sysadmin', 'name' => 'System Administration', 'category' => 'technical', 'aliases' => [
                'SysAdmin', 'System Administrator'
            ]],

            ['code' => 'hardware_support', 'name' => 'Hardware Support', 'category' => 'technical', 'aliases' => [
                'Computer Hardware', 'Hardware Troubleshooting'
            ]],

            ['code' => 'windows_server', 'name' => 'Windows Server', 'category' => 'technical', 'aliases' => [
                'Microsoft Windows Server'
            ]],

            ['code' => 'active_directory', 'name' => 'Active Directory', 'category' => 'technical', 'aliases' => [
                'AD', 'Microsoft Active Directory'
            ]],

            ['code' => 'virtualization', 'name' => 'Virtualization', 'category' => 'technical', 'aliases' => [
                'VM', 'Virtual Machines', 'Virtual Machine'
            ]],

            ['code' => 'vmware', 'name' => 'VMware', 'category' => 'technical', 'aliases' => [
                'VMware ESXi', 'VMware vSphere'
            ]],

            ['code' => 'proxmox', 'name' => 'Proxmox', 'category' => 'technical', 'aliases' => [
                'Proxmox VE'
            ]],


            /*
            |--------------------------------------------------------------------------
            | PROJECT / SOFTWARE ENGINEERING
            |--------------------------------------------------------------------------
            */
            ['code' => 'agile', 'name' => 'Agile', 'category' => 'soft', 'aliases' => [
                'Agile Methodology', 'Agile Development'
            ]],

            ['code' => 'scrum', 'name' => 'Scrum', 'category' => 'soft', 'aliases' => [
                'Scrum Methodology', 'Scrum Framework'
            ]],

            ['code' => 'kanban', 'name' => 'Kanban', 'category' => 'soft', 'aliases' => [
                'Kanban Methodology'
            ]],

            ['code' => 'project_management', 'name' => 'Project Management', 'category' => 'soft', 'aliases' => [
                'Project Manager', 'Project Planning'
            ]],

            ['code' => 'jira', 'name' => 'Jira', 'category' => 'technical', 'aliases' => [
                'Atlassian Jira'
            ]],


            /*
            |--------------------------------------------------------------------------
            | SOFT SKILLS
            |--------------------------------------------------------------------------
            */
            ['code' => 'communication', 'name' => 'Communication', 'category' => 'soft', 'aliases' => [
                'Komunikasi',
                'Interpersonal Skills',
                'Verbal Communication',
                'Written Communication'
            ]],

            ['code' => 'teamwork', 'name' => 'Teamwork & Collaboration', 'category' => 'soft', 'aliases' => [
                'Kerja Sama Tim',
                'Collaboration',
                'Team Collaboration',
                'Cross-functional Teamwork'
            ]],

            ['code' => 'problem_solving', 'name' => 'Problem Solving', 'category' => 'soft', 'aliases' => [
                'Troubleshooting',
                'Pemecahan Masalah',
                'Critical Thinking'
            ]],

            ['code' => 'critical_thinking', 'name' => 'Critical Thinking', 'category' => 'soft', 'aliases' => [
                'Analytical Thinking',
                'Analytical Skills'
            ]],

            ['code' => 'time_management', 'name' => 'Time Management', 'category' => 'soft', 'aliases' => [
                'Manajemen Waktu',
                'Prioritization'
            ]],

            ['code' => 'adaptability', 'name' => 'Adaptability & Learning Agility', 'category' => 'soft', 'aliases' => [
                'Adaptability',
                'Adaptabilitas',
                'Fast Learner',
                'Learning Agility',
                'Flexibility'
            ]],

            ['code' => 'leadership', 'name' => 'Leadership', 'category' => 'soft', 'aliases' => [
                'Team Leadership',
                'Leadership Skills'
            ]],

            ['code' => 'attention_to_detail', 'name' => 'Attention to Detail', 'category' => 'soft', 'aliases' => [
                'Detail Oriented',
                'Detail-Oriented',
                'Attention to Details'
            ]],

            ['code' => 'english', 'name' => 'English', 'category' => 'soft', 'aliases' => [
                'English Language',
                'Bahasa Inggris'
            ]],

        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(
                ['code' => $skill['code']],
                $skill
            );
        }
    }
}
