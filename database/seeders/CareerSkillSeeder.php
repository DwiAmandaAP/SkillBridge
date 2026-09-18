<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class CareerSkillSeeder extends Seeder
{
    /**
     * Menghubungkan skills ke career.
     *
     * Format:
     * [
     *     ['skill_code', required_level, 'importance'],
     * ]
     */
    private function attachSkills(string $careerSlug, array $skills): void
    {
        $career = Career::where('slug', $careerSlug)->firstOrFail();

        $data = [];

        foreach ($skills as [$code, $level, $importance]) {
            $skill = Skill::where('code', $code)->firstOrFail();

            $data[$skill->id] = [
                'required_level' => $level,
                'importance' => $importance,
            ];
        }

        /*
         * sync() lebih aman untuk seeder karena:
         * - tidak membuat duplicate pivot
         * - skill yang sudah ada akan diperbarui
         * - required_level dan importance ikut diperbarui
         */
        $career->skills()->sync($data);
    }

    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | DATA ANALYST
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('data-analyst', [
            ['sql', 85, 'critical'],
            ['excel', 80, 'critical'],
            ['powerbi', 75, 'critical'],
            ['tableau', 65, 'important'],
            ['data_analysis', 90, 'critical'],
            ['data_visualization', 75, 'important'],
            ['communication', 70, 'important'],
            ['critical_thinking', 70, 'important'],
            ['attention_to_detail', 75, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | DATA ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('data-engineer', [
            ['sql', 90, 'critical'],
            ['python', 85, 'critical'],
            ['etl', 85, 'critical'],
            ['data_engineering', 90, 'critical'],
            ['data_warehouse', 80, 'critical'],
            ['apache_spark', 70, 'important'],
            ['apache_kafka', 65, 'important'],
            ['docker', 60, 'important'],
            ['kubernetes', 50, 'optional'],
            ['linux', 55, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | FRONTEND DEVELOPER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('frontend-developer', [
            ['html_css', 90, 'critical'],
            ['javascript', 90, 'critical'],
            ['typescript', 80, 'important'],
            ['react', 85, 'critical'],
            ['tailwind_css', 70, 'important'],
            ['bootstrap', 60, 'optional'],
            ['sass_scss', 55, 'optional'],
            ['git', 70, 'important'],
            ['rest_api', 65, 'important'],
            ['figma', 45, 'optional'],
            ['problem_solving', 70, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | BACKEND DEVELOPER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('backend-developer', [
            ['php', 80, 'important'],
            ['laravel', 85, 'critical'],
            ['nodejs', 75, 'important'],
            ['expressjs', 75, 'important'],
            ['sql', 85, 'critical'],
            ['mysql', 80, 'critical'],
            ['rest_api', 90, 'critical'],
            ['git', 70, 'important'],
            ['object_oriented_programming', 75, 'important'],
            ['design_patterns', 60, 'optional'],
            ['problem_solving', 75, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | FULL STACK DEVELOPER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('fullstack-developer', [
            ['html_css', 85, 'critical'],
            ['javascript', 85, 'critical'],
            ['typescript', 70, 'important'],
            ['react', 75, 'important'],
            ['nodejs', 75, 'important'],
            ['expressjs', 70, 'important'],
            ['laravel', 65, 'optional'],
            ['rest_api', 85, 'critical'],
            ['sql', 80, 'critical'],
            ['mysql', 75, 'important'],
            ['git', 75, 'important'],
            ['docker', 55, 'optional'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | MOBILE DEVELOPER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('mobile-developer', [
            ['flutter', 85, 'critical'],
            ['react_native', 75, 'important'],
            ['android_development', 80, 'critical'],
            ['ios_development', 70, 'important'],
            ['kotlin', 70, 'important'],
            ['swift', 70, 'important'],
            ['jetpack_compose', 65, 'important'],
            ['rest_api', 70, 'important'],
            ['git', 65, 'important'],
            ['object_oriented_programming', 70, 'important'],
            ['problem_solving', 70, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | DEVOPS ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('devops-engineer', [
            ['linux', 90, 'critical'],
            ['docker', 90, 'critical'],
            ['kubernetes', 80, 'critical'],
            ['git', 80, 'critical'],
            ['ci_cd', 90, 'critical'],
            ['github_actions', 75, 'important'],
            ['jenkins', 70, 'important'],
            ['terraform', 75, 'important'],
            ['ansible', 65, 'important'],
            ['bash', 80, 'important'],
            ['nginx', 60, 'optional'],
            ['apache', 55, 'optional'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | CLOUD ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('cloud-engineer', [
            ['aws', 85, 'critical'],
            ['azure', 70, 'important'],
            ['google_cloud', 70, 'important'],
            ['linux', 80, 'critical'],
            ['docker', 75, 'important'],
            ['kubernetes', 75, 'important'],
            ['terraform', 80, 'critical'],
            ['networking', 70, 'important'],
            ['tcp_ip', 65, 'important'],
            ['bash', 70, 'important'],
            ['nginx', 60, 'optional'],
            ['load_balancing', 60, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | NETWORK ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('network-engineer', [
            ['networking', 90, 'critical'],
            ['tcp_ip', 90, 'critical'],
            ['dns', 75, 'important'],
            ['dhcp', 75, 'important'],
            ['routing_switching', 90, 'critical'],
            ['cisco', 85, 'critical'],
            ['cisco_ccna', 80, 'important'],
            ['network_monitoring', 75, 'important'],
            ['load_balancing', 60, 'optional'],
            ['vpn', 70, 'important'],
            ['firewall', 70, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | CYBERSECURITY ANALYST
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('cybersecurity-analyst', [
            ['cybersecurity', 90, 'critical'],
            ['network_security', 85, 'critical'],
            ['security_operations', 85, 'critical'],
            ['siem', 80, 'critical'],
            ['ids_ips', 75, 'important'],
            ['firewall', 70, 'important'],
            ['vulnerability_assessment', 80, 'critical'],
            ['iam', 70, 'important'],
            ['security_audit', 65, 'important'],
            ['owasp', 60, 'optional'],
            ['cryptography', 55, 'optional'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | PENETRATION TESTER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('penetration-tester', [
            ['cybersecurity', 90, 'critical'],
            ['penetration_testing', 95, 'critical'],
            ['ethical_hacking', 90, 'critical'],
            ['vulnerability_assessment', 85, 'critical'],
            ['network_security', 85, 'critical'],
            ['owasp', 85, 'critical'],
            ['cryptography', 65, 'important'],
            ['firewall', 60, 'important'],
            ['linux', 70, 'important'],
            ['tcp_ip', 75, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | QA ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('qa-engineer', [
            ['software_testing', 90, 'critical'],
            ['manual_testing', 85, 'critical'],
            ['automation_testing', 80, 'critical'],
            ['selenium', 70, 'important'],
            ['cypress', 70, 'important'],
            ['playwright', 70, 'important'],
            ['postman', 75, 'important'],
            ['unit_testing', 70, 'important'],
            ['integration_testing', 70, 'important'],
            ['attention_to_detail', 85, 'critical'],
            ['problem_solving', 70, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | MACHINE LEARNING ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('machine-learning-engineer', [
            ['python', 90, 'critical'],
            ['machine_learning', 95, 'critical'],
            ['scikit_learn', 85, 'critical'],
            ['tensorflow', 75, 'important'],
            ['pytorch', 75, 'important'],
            ['deep_learning', 80, 'critical'],
            ['data_analysis', 70, 'important'],
            ['data_visualization', 55, 'optional'],
            ['mlops', 70, 'important'],
            ['model_deployment', 75, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | AI ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('ai-engineer', [
            ['python', 90, 'critical'],
            ['artificial_intelligence', 95, 'critical'],
            ['machine_learning', 85, 'critical'],
            ['deep_learning', 85, 'critical'],
            ['tensorflow', 75, 'important'],
            ['pytorch', 80, 'important'],
            ['nlp', 75, 'important'],
            ['computer_vision', 75, 'important'],
            ['generative_ai', 70, 'important'],
            ['model_deployment', 70, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | GENERATIVE AI ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('generative-ai-engineer', [
            ['python', 85, 'critical'],
            ['artificial_intelligence', 90, 'critical'],
            ['generative_ai', 95, 'critical'],
            ['llm', 95, 'critical'],
            ['rag', 90, 'critical'],
            ['prompt_engineering', 80, 'important'],
            ['vector_database', 85, 'critical'],
            ['pinecone', 70, 'important'],
            ['embeddings', 85, 'critical'],
            ['model_deployment', 70, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | UI/UX DESIGNER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('ui-ux-designer', [
            ['figma', 90, 'critical'],
            ['ui_design', 90, 'critical'],
            ['ux_design', 90, 'critical'],
            ['user_research', 80, 'critical'],
            ['wireframing', 85, 'critical'],
            ['prototyping', 85, 'critical'],
            ['communication', 70, 'important'],
            ['critical_thinking', 65, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | IT SUPPORT SPECIALIST
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('it-support-specialist', [
            ['it_support', 90, 'critical'],
            ['hardware_support', 85, 'critical'],
            ['networking', 70, 'important'],
            ['windows_server', 60, 'important'],
            ['linux', 55, 'important'],
            ['problem_solving', 85, 'critical'],
            ['communication', 80, 'critical'],
            ['attention_to_detail', 65, 'important'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | SYSTEM ADMINISTRATOR
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('system-administrator', [
            ['sysadmin', 95, 'critical'],
            ['linux', 90, 'critical'],
            ['windows_server', 85, 'critical'],
            ['active_directory', 80, 'important'],
            ['virtualization', 80, 'important'],
            ['vmware', 70, 'important'],
            ['proxmox', 65, 'important'],
            ['bash', 75, 'important'],
            ['networking', 70, 'important'],
            ['docker', 55, 'optional'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | SOFTWARE ENGINEER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('software-engineer', [
            ['java', 75, 'important'],
            ['kotlin', 65, 'optional'],
            ['cpp', 70, 'important'],
            ['c', 65, 'optional'],
            ['csharp', 70, 'important'],
            ['dotnet', 70, 'important'],
            ['python', 65, 'important'],
            ['object_oriented_programming', 90, 'critical'],
            ['functional_programming', 55, 'optional'],
            ['design_patterns', 80, 'critical'],
            ['software_architecture', 75, 'important'],
            ['software_testing', 70, 'important'],
            ['unit_testing', 70, 'important'],
            ['integration_testing', 65, 'important'],
            ['git', 80, 'critical'],
            ['problem_solving', 90, 'critical'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | SOFTWARE ARCHITECT
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('software-architect', [
            ['software_architecture', 95, 'critical'],
            ['design_patterns', 90, 'critical'],
            ['object_oriented_programming', 85, 'critical'],
            ['functional_programming', 60, 'optional'],
            ['microservices', 85, 'critical'],
            ['rest_api', 80, 'important'],
            ['graphql', 65, 'important'],
            ['grpc', 60, 'important'],
            ['git', 70, 'important'],
            ['docker', 70, 'important'],
            ['kubernetes', 60, 'optional'],
            ['problem_solving', 90, 'critical'],
            ['critical_thinking', 85, 'critical'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | IT PROJECT MANAGER
        |--------------------------------------------------------------------------
        */

        $this->attachSkills('project-manager', [
            ['project_management', 95, 'critical'],
            ['agile', 85, 'critical'],
            ['scrum', 85, 'critical'],
            ['kanban', 70, 'important'],
            ['jira', 75, 'important'],
            ['communication', 90, 'critical'],
            ['teamwork', 90, 'critical'],
            ['leadership', 85, 'critical'],
            ['time_management', 85, 'critical'],
            ['adaptability', 80, 'important'],
            ['problem_solving', 80, 'important'],
            ['english', 70, 'important'],
        ]);
    }
}