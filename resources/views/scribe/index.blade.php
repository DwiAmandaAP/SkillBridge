<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://skillbridge.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.11.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.11.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-career" class="tocify-header">
                <li class="tocify-item level-1" data-unique="career">
                    <a href="#career">Career</a>
                </li>
                                    <ul id="tocify-subheader-career" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="career-GETapi-v1-careers">
                                <a href="#career-GETapi-v1-careers">GET Careers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="career-GETapi-v1-careers--slug-">
                                <a href="#career-GETapi-v1-careers--slug-">GET Career Detail</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-industry-insight" class="tocify-header">
                <li class="tocify-item level-1" data-unique="industry-insight">
                    <a href="#industry-insight">Industry Insight</a>
                </li>
                                    <ul id="tocify-subheader-industry-insight" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="industry-insight-GETapi-v1-industry-insights">
                                <a href="#industry-insight-GETapi-v1-industry-insights">GET Industry Insights</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="industry-insight-GETapi-v1-industry-insights--skill_id--trend">
                                <a href="#industry-insight-GETapi-v1-industry-insights--skill_id--trend">GET Industry Insight Trend</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="industry-insight-GETapi-v1-role-insights">
                                <a href="#industry-insight-GETapi-v1-role-insights">GET Role Insights</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="industry-insight-GETapi-v1-role-insights--role--trend">
                                <a href="#industry-insight-GETapi-v1-role-insights--role--trend">GET Role Insight Trend</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-v1-auth-register">
                                <a href="#authentication-POSTapi-v1-auth-register">POST Register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-v1-auth-login">
                                <a href="#authentication-POSTapi-v1-auth-login">POST Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-v1-auth-logout">
                                <a href="#authentication-POSTapi-v1-auth-logout">POST Logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-GETapi-v1-me">
                                <a href="#authentication-GETapi-v1-me">GET Current User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-PATCHapi-v1-me">
                                <a href="#authentication-PATCHapi-v1-me">PATCH Update Profile</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-skills" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-skills">
                    <a href="#user-skills">User - Skills</a>
                </li>
                                    <ul id="tocify-subheader-user-skills" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-skills-GETapi-v1-me-skills">
                                <a href="#user-skills-GETapi-v1-me-skills">GET My Skills</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-skills-POSTapi-v1-me-skills">
                                <a href="#user-skills-POSTapi-v1-me-skills">POST Save My Skill</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-onboarding" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-onboarding">
                    <a href="#user-onboarding">User - Onboarding</a>
                </li>
                                    <ul id="tocify-subheader-user-onboarding" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-onboarding-POSTapi-v1-onboarding">
                                <a href="#user-onboarding-POSTapi-v1-onboarding">POST Complete Onboarding</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-assessment" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-assessment">
                    <a href="#user-assessment">User - Assessment</a>
                </li>
                                    <ul id="tocify-subheader-user-assessment" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-assessment-GETapi-v1-assessment-questions">
                                <a href="#user-assessment-GETapi-v1-assessment-questions">GET Assessment Questions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-assessment-POSTapi-v1-assessment-submit">
                                <a href="#user-assessment-POSTapi-v1-assessment-submit">POST Submit Assessment</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-skill-gap-readiness" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-skill-gap-readiness">
                    <a href="#user-skill-gap-readiness">User - Skill Gap & Readiness</a>
                </li>
                                    <ul id="tocify-subheader-user-skill-gap-readiness" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-skill-gap-readiness-GETapi-v1-skill-gap">
                                <a href="#user-skill-gap-readiness-GETapi-v1-skill-gap">GET Skill Gap</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-skill-gap-readiness-GETapi-v1-readiness-score">
                                <a href="#user-skill-gap-readiness-GETapi-v1-readiness-score">GET Readiness Score</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-roadmap" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-roadmap">
                    <a href="#user-roadmap">User - Roadmap</a>
                </li>
                                    <ul id="tocify-subheader-user-roadmap" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-roadmap-POSTapi-v1-roadmap-generate">
                                <a href="#user-roadmap-POSTapi-v1-roadmap-generate">POST Generate Roadmap</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-roadmap-GETapi-v1-roadmap">
                                <a href="#user-roadmap-GETapi-v1-roadmap">GET My Roadmap</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-roadmap-PATCHapi-v1-roadmap-phases--id-">
                                <a href="#user-roadmap-PATCHapi-v1-roadmap-phases--id-">PATCH Update Roadmap Phase</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-portfolio" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-portfolio">
                    <a href="#user-portfolio">User - Portfolio</a>
                </li>
                                    <ul id="tocify-subheader-user-portfolio" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-portfolio-GETapi-v1-portfolio">
                                <a href="#user-portfolio-GETapi-v1-portfolio">GET Portfolio Checklist</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-portfolio-PATCHapi-v1-portfolio-checklist--item_code-">
                                <a href="#user-portfolio-PATCHapi-v1-portfolio-checklist--item_code-">PATCH Update Portfolio Checklist</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-portfolio-GETapi-v1-portfolio-certificates">
                                <a href="#user-portfolio-GETapi-v1-portfolio-certificates">GET My Certificates</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-portfolio-POSTapi-v1-portfolio-certificates">
                                <a href="#user-portfolio-POSTapi-v1-portfolio-certificates">POST Add Certificate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-portfolio-DELETEapi-v1-portfolio-certificates--id-">
                                <a href="#user-portfolio-DELETEapi-v1-portfolio-certificates--id-">DELETE Delete Certificate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-portfolio-POSTapi-v1-portfolio-github-analyze">
                                <a href="#user-portfolio-POSTapi-v1-portfolio-github-analyze">POST Analyze GitHub Portfolio</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-progress-achievements" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-progress-achievements">
                    <a href="#user-progress-achievements">User - Progress & Achievements</a>
                </li>
                                    <ul id="tocify-subheader-user-progress-achievements" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-progress-achievements-GETapi-v1-progress-history">
                                <a href="#user-progress-achievements-GETapi-v1-progress-history">GET Progress History</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-progress-achievements-GETapi-v1-achievements">
                                <a href="#user-progress-achievements-GETapi-v1-achievements">GET Achievements</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-dashboard" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-dashboard">
                    <a href="#admin-dashboard">Admin - Dashboard</a>
                </li>
                                    <ul id="tocify-subheader-admin-dashboard" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-dashboard-GETapi-v1-admin-dashboard">
                                <a href="#admin-dashboard-GETapi-v1-admin-dashboard">GET Admin Dashboard</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-career-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-career-management">
                    <a href="#admin-career-management">Admin - Career Management</a>
                </li>
                                    <ul id="tocify-subheader-admin-career-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-career-management-GETapi-v1-admin-careers">
                                <a href="#admin-career-management-GETapi-v1-admin-careers">GET Admin Careers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-career-management-POSTapi-v1-admin-careers">
                                <a href="#admin-career-management-POSTapi-v1-admin-careers">POST Admin Career</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-career-management-PATCHapi-v1-admin-careers--career_id-">
                                <a href="#admin-career-management-PATCHapi-v1-admin-careers--career_id-">PATCH Admin Career</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-career-management-DELETEapi-v1-admin-careers--career_id-">
                                <a href="#admin-career-management-DELETEapi-v1-admin-careers--career_id-">DELETE Admin Career</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-skill-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-skill-management">
                    <a href="#admin-skill-management">Admin - Skill Management</a>
                </li>
                                    <ul id="tocify-subheader-admin-skill-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-skill-management-GETapi-v1-admin-skills">
                                <a href="#admin-skill-management-GETapi-v1-admin-skills">GET Admin Skills</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-skill-management-POSTapi-v1-admin-skills">
                                <a href="#admin-skill-management-POSTapi-v1-admin-skills">POST Admin Skill</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-skill-management-PATCHapi-v1-admin-skills--skill_id-">
                                <a href="#admin-skill-management-PATCHapi-v1-admin-skills--skill_id-">PATCH Admin Skill</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-skill-management-DELETEapi-v1-admin-skills--skill_id-">
                                <a href="#admin-skill-management-DELETEapi-v1-admin-skills--skill_id-">DELETE Admin Skill</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-industry-insight" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-industry-insight">
                    <a href="#admin-industry-insight">Admin - Industry Insight</a>
                </li>
                                    <ul id="tocify-subheader-admin-industry-insight" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-industry-insight-GETapi-v1-admin-industry-insights">
                                <a href="#admin-industry-insight-GETapi-v1-admin-industry-insights">GET Admin Industry Insights</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-industry-insight-POSTapi-v1-admin-industry-insights">
                                <a href="#admin-industry-insight-POSTapi-v1-admin-industry-insights">POST Admin Industry Insight</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-learning-resources" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-learning-resources">
                    <a href="#admin-learning-resources">Admin - Learning Resources</a>
                </li>
                                    <ul id="tocify-subheader-admin-learning-resources" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-learning-resources-GETapi-v1-admin-learning-resources">
                                <a href="#admin-learning-resources-GETapi-v1-admin-learning-resources">GET Learning Resources</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-learning-resources-POSTapi-v1-admin-learning-resources">
                                <a href="#admin-learning-resources-POSTapi-v1-admin-learning-resources">POST Learning Resource</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-learning-resources-DELETEapi-v1-admin-learning-resources--learningResource_id-">
                                <a href="#admin-learning-resources-DELETEapi-v1-admin-learning-resources--learningResource_id-">DELETE Learning Resource</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-user-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-user-management">
                    <a href="#admin-user-management">Admin - User Management</a>
                </li>
                                    <ul id="tocify-subheader-admin-user-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-user-management-GETapi-v1-admin-users">
                                <a href="#admin-user-management-GETapi-v1-admin-users">GET Admin Users</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-analytics" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-analytics">
                    <a href="#admin-analytics">Admin - Analytics</a>
                </li>
                                    <ul id="tocify-subheader-admin-analytics" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-analytics-GETapi-v1-admin-analytics">
                                <a href="#admin-analytics-GETapi-v1-admin-analytics">GET Admin Analytics</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-scoring-settings" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-scoring-settings">
                    <a href="#admin-scoring-settings">Admin - Scoring Settings</a>
                </li>
                                    <ul id="tocify-subheader-admin-scoring-settings" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-scoring-settings-GETapi-v1-admin-scoring-settings">
                                <a href="#admin-scoring-settings-GETapi-v1-admin-scoring-settings">GET Scoring Settings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-scoring-settings-PUTapi-v1-admin-scoring-settings">
                                <a href="#admin-scoring-settings-PUTapi-v1-admin-scoring-settings">PUT Scoring Settings</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-settings" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-settings">
                    <a href="#admin-settings">Admin - Settings</a>
                </li>
                                    <ul id="tocify-subheader-admin-settings" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-settings-PATCHapi-v1-admin-settings-industry-insight-mode">
                                <a href="#admin-settings-PATCHapi-v1-admin-settings-industry-insight-mode">PATCH Update Industry Insight Mode</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-admin-scrape-runs" class="tocify-header">
                <li class="tocify-item level-1" data-unique="admin-scrape-runs">
                    <a href="#admin-scrape-runs">Admin - Scrape Runs</a>
                </li>
                                    <ul id="tocify-subheader-admin-scrape-runs" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="admin-scrape-runs-GETapi-v1-admin-scrape-runs">
                                <a href="#admin-scrape-runs-GETapi-v1-admin-scrape-runs">GET Scrape Runs</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="admin-scrape-runs-POSTapi-v1-admin-scrape-runs-trigger">
                                <a href="#admin-scrape-runs-POSTapi-v1-admin-scrape-runs-trigger">POST Trigger Scraping</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-internal-skill-taxonomy" class="tocify-header">
                <li class="tocify-item level-1" data-unique="internal-skill-taxonomy">
                    <a href="#internal-skill-taxonomy">Internal - Skill Taxonomy</a>
                </li>
                                    <ul id="tocify-subheader-internal-skill-taxonomy" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="internal-skill-taxonomy-GETapi-internal-skills">
                                <a href="#internal-skill-taxonomy-GETapi-internal-skills">GET Internal Skill Taxonomy</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Display Swagger API page.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: September 19, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://skillbridge.test</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_TOKEN}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Masukkan token Sanctum pada kolom Authorization dengan format <code>Bearer TOKEN</code>. Gunakan token user untuk endpoint user dan token admin untuk endpoint admin.</p>

        <h1 id="career">Career</h1>

    

                                <h2 id="career-GETapi-v1-careers">GET Careers</h2>

<p>
</p>

<p>Description: Menampilkan daftar career yang tersedia untuk dipilih pengguna.
Hasil dapat difilter berdasarkan kategori, tingkat kesulitan, dan dukungan kerja remote.</p>

<span id="example-requests-GETapi-v1-careers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/careers?category=technology&amp;difficulty=intermediate&amp;remote_friendly=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/careers"
);

const params = {
    "category": "technology",
    "difficulty": "intermediate",
    "remote_friendly": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-careers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;OK&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-careers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-careers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-careers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-careers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-careers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-careers" data-method="GET"
      data-path="api/v1/careers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-careers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-careers"
                    onclick="tryItOut('GETapi-v1-careers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-careers"
                    onclick="cancelTryOut('GETapi-v1-careers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-careers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/careers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-careers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-careers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="GETapi-v1-careers"
               value="technology"
               data-component="query">
    <br>
<p>Filter kategori career. Example: <code>technology</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>difficulty</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="difficulty"                data-endpoint="GETapi-v1-careers"
               value="intermediate"
               data-component="query">
    <br>
<p>Filter tingkat kesulitan career. Example: <code>intermediate</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>remote_friendly</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-v1-careers" style="display: none">
            <input type="radio" name="remote_friendly"
                   value="1"
                   data-endpoint="GETapi-v1-careers"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-v1-careers" style="display: none">
            <input type="radio" name="remote_friendly"
                   value="0"
                   data-endpoint="GETapi-v1-careers"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Filter career yang mendukung kerja remote. Example: <code>true</code></p>
            </div>
                </form>

                    <h2 id="career-GETapi-v1-careers--slug-">GET Career Detail</h2>

<p>
</p>

<p>Description: Menampilkan detail career berdasarkan slug, termasuk daftar skill yang dibutuhkan,
level minimum, dan tingkat kepentingannya.</p>

<span id="example-requests-GETapi-v1-careers--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/careers/frontend-developer" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/careers/frontend-developer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-careers--slug-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;OK&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 3,
        &quot;slug&quot;: &quot;frontend-developer&quot;,
        &quot;name&quot;: &quot;Frontend Developer&quot;,
        &quot;required_skills&quot;: [
            {
                &quot;skill_id&quot;: 1,
                &quot;skill_name&quot;: &quot;JavaScript&quot;,
                &quot;required_level&quot;: 90,
                &quot;importance&quot;: &quot;critical&quot;
            },
            {
                &quot;skill_id&quot;: 2,
                &quot;skill_name&quot;: &quot;TypeScript&quot;,
                &quot;required_level&quot;: 80,
                &quot;importance&quot;: &quot;important&quot;
            },
            {
                &quot;skill_id&quot;: 18,
                &quot;skill_name&quot;: &quot;HTML &amp; CSS&quot;,
                &quot;required_level&quot;: 90,
                &quot;importance&quot;: &quot;critical&quot;
            },
            {
                &quot;skill_id&quot;: 19,
                &quot;skill_name&quot;: &quot;Sass / SCSS&quot;,
                &quot;required_level&quot;: 55,
                &quot;importance&quot;: &quot;optional&quot;
            },
            {
                &quot;skill_id&quot;: 20,
                &quot;skill_name&quot;: &quot;Bootstrap&quot;,
                &quot;required_level&quot;: 60,
                &quot;importance&quot;: &quot;optional&quot;
            },
            {
                &quot;skill_id&quot;: 21,
                &quot;skill_name&quot;: &quot;Tailwind CSS&quot;,
                &quot;required_level&quot;: 70,
                &quot;importance&quot;: &quot;important&quot;
            },
            {
                &quot;skill_id&quot;: 22,
                &quot;skill_name&quot;: &quot;React&quot;,
                &quot;required_level&quot;: 85,
                &quot;importance&quot;: &quot;critical&quot;
            },
            {
                &quot;skill_id&quot;: 37,
                &quot;skill_name&quot;: &quot;RESTful API&quot;,
                &quot;required_level&quot;: 65,
                &quot;importance&quot;: &quot;important&quot;
            },
            {
                &quot;skill_id&quot;: 63,
                &quot;skill_name&quot;: &quot;Git&quot;,
                &quot;required_level&quot;: 70,
                &quot;importance&quot;: &quot;important&quot;
            },
            {
                &quot;skill_id&quot;: 138,
                &quot;skill_name&quot;: &quot;Figma&quot;,
                &quot;required_level&quot;: 45,
                &quot;importance&quot;: &quot;optional&quot;
            },
            {
                &quot;skill_id&quot;: 159,
                &quot;skill_name&quot;: &quot;Problem Solving&quot;,
                &quot;required_level&quot;: 70,
                &quot;importance&quot;: &quot;important&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-careers--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-careers--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-careers--slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-careers--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-careers--slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-careers--slug-" data-method="GET"
      data-path="api/v1/careers/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-careers--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-careers--slug-"
                    onclick="tryItOut('GETapi-v1-careers--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-careers--slug-"
                    onclick="cancelTryOut('GETapi-v1-careers--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-careers--slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/careers/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-careers--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-careers--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="GETapi-v1-careers--slug-"
               value="frontend-developer"
               data-component="url">
    <br>
<p>Slug career. Example: <code>frontend-developer</code></p>
            </div>
                    </form>

                <h1 id="industry-insight">Industry Insight</h1>

    

                                <h2 id="industry-insight-GETapi-v1-industry-insights">GET Industry Insights</h2>

<p>
</p>

<p>Description: Menampilkan persentase demand tiap skill berdasarkan hasil scraping lowongan.</p>
<p>Tanpa region, data yang ditampilkan adalah snapshot demand global seluruh Indonesia.
Dengan region, data yang ditampilkan adalah snapshot terbaru per skill untuk provinsi tersebut.</p>

<span id="example-requests-GETapi-v1-industry-insights">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/industry-insights?region=Jawa+Timur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/industry-insights"
);

const params = {
    "region": "Jawa Timur",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-industry-insights">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;OK&quot;,
    &quot;data&quot;: [
        {
            &quot;skill_id&quot;: 10,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;PHP&quot;,
            &quot;demand&quot;: 8,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 32,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;Laravel&quot;,
            &quot;demand&quot;: 8,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 46,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;MySQL&quot;,
            &quot;demand&quot;: 8,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 144,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;IT Support&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 159,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;Problem Solving&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 103,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;Software Testing&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 104,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;Manual Testing&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 105,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;Test Automation&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 1,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;JavaScript&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 18,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;HTML &amp; CSS&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 29,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;Node.js&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;skill_id&quot;: 37,
            &quot;skill_code&quot;: null,
            &quot;skill_name&quot;: &quot;RESTful API&quot;,
            &quot;demand&quot;: 4,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;job_sample_size&quot;: 25,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-industry-insights" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-industry-insights"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-industry-insights"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-industry-insights" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-industry-insights">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-industry-insights" data-method="GET"
      data-path="api/v1/industry-insights"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-industry-insights', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-industry-insights"
                    onclick="tryItOut('GETapi-v1-industry-insights');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-industry-insights"
                    onclick="cancelTryOut('GETapi-v1-industry-insights');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-industry-insights"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/industry-insights</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-industry-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-industry-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>region</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="region"                data-endpoint="GETapi-v1-industry-insights"
               value="Jawa Timur"
               data-component="query">
    <br>
<p>Nama provinsi atau kota yang ingin difilter. Example: <code>Jawa Timur</code></p>
            </div>
                </form>

                    <h2 id="industry-insight-GETapi-v1-industry-insights--skill_id--trend">GET Industry Insight Trend</h2>

<p>
</p>

<p>Description: Menampilkan riwayat perubahan demand suatu skill berdasarkan periode.
Tanpa region, riwayat yang ditampilkan bersifat global. Dengan region, riwayat dibatasi
pada provinsi tersebut.</p>

<span id="example-requests-GETapi-v1-industry-insights--skill_id--trend">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/industry-insights/3/trend?region=Jawa+Timur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/industry-insights/3/trend"
);

const params = {
    "region": "Jawa Timur",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-industry-insights--skill_id--trend">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;OK&quot;,
    &quot;data&quot;: {
        &quot;skill_id&quot;: 3,
        &quot;skill_code&quot;: &quot;python&quot;,
        &quot;skill_name&quot;: &quot;Python&quot;,
        &quot;region&quot;: &quot;Jawa Timur&quot;,
        &quot;history&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-industry-insights--skill_id--trend" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-industry-insights--skill_id--trend"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-industry-insights--skill_id--trend"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-industry-insights--skill_id--trend" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-industry-insights--skill_id--trend">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-industry-insights--skill_id--trend" data-method="GET"
      data-path="api/v1/industry-insights/{skill_id}/trend"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-industry-insights--skill_id--trend', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-industry-insights--skill_id--trend"
                    onclick="tryItOut('GETapi-v1-industry-insights--skill_id--trend');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-industry-insights--skill_id--trend"
                    onclick="cancelTryOut('GETapi-v1-industry-insights--skill_id--trend');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-industry-insights--skill_id--trend"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/industry-insights/{skill_id}/trend</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-industry-insights--skill_id--trend"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-industry-insights--skill_id--trend"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill_id"                data-endpoint="GETapi-v1-industry-insights--skill_id--trend"
               value="3"
               data-component="url">
    <br>
<p>ID skill yang ingin dilihat trennya. Example: <code>3</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>region</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="region"                data-endpoint="GETapi-v1-industry-insights--skill_id--trend"
               value="Jawa Timur"
               data-component="query">
    <br>
<p>Nama provinsi atau kota yang ingin difilter. Example: <code>Jawa Timur</code></p>
            </div>
                </form>

                    <h2 id="industry-insight-GETapi-v1-role-insights">GET Role Insights</h2>

<p>
</p>

<p>Description: Menampilkan persentase demand tiap role berdasarkan hasil scraping lowongan.
Tanpa region, data yang ditampilkan bersifat global seluruh Indonesia. Dengan region,
data yang ditampilkan adalah snapshot terbaru per role untuk provinsi tersebut.</p>

<span id="example-requests-GETapi-v1-role-insights">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/role-insights?region=Jawa+Timur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/role-insights"
);

const params = {
    "region": "Jawa Timur",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-role-insights">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;OK&quot;,
    &quot;data&quot;: [
        {
            &quot;role&quot;: &quot;IT Support&quot;,
            &quot;job_count&quot;: 1,
            &quot;total_jobs&quot;: 4,
            &quot;percentage&quot;: 25,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;role&quot;: &quot;QA / Testing&quot;,
            &quot;job_count&quot;: 1,
            &quot;total_jobs&quot;: 4,
            &quot;percentage&quot;: 25,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;role&quot;: &quot;Network / System Admin&quot;,
            &quot;job_count&quot;: 1,
            &quot;total_jobs&quot;: 4,
            &quot;percentage&quot;: 25,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        },
        {
            &quot;role&quot;: &quot;Backend&quot;,
            &quot;job_count&quot;: 1,
            &quot;total_jobs&quot;: 4,
            &quot;percentage&quot;: 25,
            &quot;trend&quot;: &quot;stable&quot;,
            &quot;period&quot;: &quot;Sep 2026&quot;,
            &quot;region&quot;: &quot;Jawa Timur&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-role-insights" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-role-insights"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-role-insights"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-role-insights" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-role-insights">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-role-insights" data-method="GET"
      data-path="api/v1/role-insights"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-role-insights', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-role-insights"
                    onclick="tryItOut('GETapi-v1-role-insights');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-role-insights"
                    onclick="cancelTryOut('GETapi-v1-role-insights');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-role-insights"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/role-insights</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-role-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-role-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>region</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="region"                data-endpoint="GETapi-v1-role-insights"
               value="Jawa Timur"
               data-component="query">
    <br>
<p>Nama provinsi atau kota yang ingin difilter. Example: <code>Jawa Timur</code></p>
            </div>
                </form>

                    <h2 id="industry-insight-GETapi-v1-role-insights--role--trend">GET Role Insight Trend</h2>

<p>
</p>

<p>Description: Menampilkan riwayat jumlah lowongan dan persentase demand untuk suatu role.</p>
<p>Tanpa region, riwayat yang ditampilkan bersifat global. Dengan region, riwayat dibatasi
pada provinsi tersebut.</p>

<span id="example-requests-GETapi-v1-role-insights--role--trend">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/role-insights/Frontend Developer/trend?region=Jawa+Timur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/role-insights/Frontend Developer/trend"
);

const params = {
    "region": "Jawa Timur",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-role-insights--role--trend">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;message&quot;: &quot;OK&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-role-insights--role--trend" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-role-insights--role--trend"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-role-insights--role--trend"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-role-insights--role--trend" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-role-insights--role--trend">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-role-insights--role--trend" data-method="GET"
      data-path="api/v1/role-insights/{role}/trend"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-role-insights--role--trend', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-role-insights--role--trend"
                    onclick="tryItOut('GETapi-v1-role-insights--role--trend');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-role-insights--role--trend"
                    onclick="cancelTryOut('GETapi-v1-role-insights--role--trend');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-role-insights--role--trend"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/role-insights/{role}/trend</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-role-insights--role--trend"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-role-insights--role--trend"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="GETapi-v1-role-insights--role--trend"
               value="Frontend Developer"
               data-component="url">
    <br>
<p>Nama role yang ingin dilihat trennya. Example: <code>Frontend Developer</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>region</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="region"                data-endpoint="GETapi-v1-role-insights--role--trend"
               value="Jawa Timur"
               data-component="query">
    <br>
<p>Nama provinsi atau kota yang ingin difilter. Example: <code>Jawa Timur</code></p>
            </div>
                </form>

                <h1 id="authentication">Authentication</h1>

    

                                <h2 id="authentication-POSTapi-v1-auth-register">POST Register</h2>

<p>
</p>

<p>Description: Membuat akun mahasiswa baru dan mengembalikan data pengguna
beserta token autentikasi Sanctum.</p>

<span id="example-requests-POSTapi-v1-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"full_name\": \"Budi Santoso\",
    \"email\": \"budi@example.com\",
    \"password\": \"rahasia123\",
    \"university\": \"Universitas Indonesia\",
    \"major\": \"Informatika\",
    \"semester\": 6,
    \"graduation_year\": 2027
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "full_name": "Budi Santoso",
    "email": "budi@example.com",
    "password": "rahasia123",
    "university": "Universitas Indonesia",
    "major": "Informatika",
    "semester": 6,
    "graduation_year": 2027
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-register">
</span>
<span id="execution-results-POSTapi-v1-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-register" data-method="POST"
      data-path="api/v1/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-register"
                    onclick="tryItOut('POSTapi-v1-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-register"
                    onclick="cancelTryOut('POSTapi-v1-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>full_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="full_name"                data-endpoint="POSTapi-v1-auth-register"
               value="Budi Santoso"
               data-component="body">
    <br>
<p>Nama lengkap pengguna. Example: <code>Budi Santoso</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-auth-register"
               value="budi@example.com"
               data-component="body">
    <br>
<p>Alamat email unik pengguna. Example: <code>budi@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-auth-register"
               value="rahasia123"
               data-component="body">
    <br>
<p>Kata sandi minimal 8 karakter. Example: <code>rahasia123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>university</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="university"                data-endpoint="POSTapi-v1-auth-register"
               value="Universitas Indonesia"
               data-component="body">
    <br>
<p>Nama universitas. Example: <code>Universitas Indonesia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>major</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="major"                data-endpoint="POSTapi-v1-auth-register"
               value="Informatika"
               data-component="body">
    <br>
<p>Program studi. Example: <code>Informatika</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>semester</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="semester"                data-endpoint="POSTapi-v1-auth-register"
               value="6"
               data-component="body">
    <br>
<p>Semester saat ini, antara 1 dan 20. Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>graduation_year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="graduation_year"                data-endpoint="POSTapi-v1-auth-register"
               value="2027"
               data-component="body">
    <br>
<p>Tahun kelulusan, antara 2000 dan 2100. Example: <code>2027</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-v1-auth-login">POST Login</h2>

<p>
</p>

<p>Description: Memvalidasi kredensial pengguna dan mengembalikan token autentikasi Sanctum.</p>

<span id="example-requests-POSTapi-v1-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"budi@gmail.com\",
    \"password\": \"password\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "budi@gmail.com",
    "password": "password"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-login">
</span>
<span id="execution-results-POSTapi-v1-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-login" data-method="POST"
      data-path="api/v1/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-login"
                    onclick="tryItOut('POSTapi-v1-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-auth-login"
               value="budi@gmail.com"
               data-component="body">
    <br>
<p>Alamat email terdaftar. Example: <code>budi@gmail.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-auth-login"
               value="password"
               data-component="body">
    <br>
<p>Kata sandi akun. Example: <code>password</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-v1-auth-logout">POST Logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menghapus token akses yang sedang digunakan sehingga sesi API pengguna berakhir.</p>

<span id="example-requests-POSTapi-v1-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/auth/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/auth/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-logout">
</span>
<span id="execution-results-POSTapi-v1-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-logout" data-method="POST"
      data-path="api/v1/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-logout"
                    onclick="tryItOut('POSTapi-v1-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-logout"
                    onclick="cancelTryOut('POSTapi-v1-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-auth-logout"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="authentication-GETapi-v1-me">GET Current User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil profil pengguna yang sedang terautentikasi.</p>

<span id="example-requests-GETapi-v1-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/me" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/me"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-me" data-method="GET"
      data-path="api/v1/me"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-me"
                    onclick="tryItOut('GETapi-v1-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-me"
                    onclick="cancelTryOut('GETapi-v1-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-me"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="authentication-PATCHapi-v1-me">PATCH Update Profile</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Memperbarui sebagian data profil pengguna yang sedang terautentikasi.
Field yang tidak dikirim tidak akan diubah.</p>

<span id="example-requests-PATCHapi-v1-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://skillbridge.test/api/v1/me" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"full_name\": \"Budi Santoso\",
    \"university\": \"Universitas Indonesia\",
    \"major\": \"Informatika\",
    \"semester\": 6,
    \"graduation_year\": 2027,
    \"target_career_id\": 1,
    \"target_timeline_months\": 12,
    \"github_username\": \"budisantoso\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/me"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "full_name": "Budi Santoso",
    "university": "Universitas Indonesia",
    "major": "Informatika",
    "semester": 6,
    "graduation_year": 2027,
    "target_career_id": 1,
    "target_timeline_months": 12,
    "github_username": "budisantoso"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-me">
</span>
<span id="execution-results-PATCHapi-v1-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-me" data-method="PATCH"
      data-path="api/v1/me"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-me"
                    onclick="tryItOut('PATCHapi-v1-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-me"
                    onclick="cancelTryOut('PATCHapi-v1-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-me"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>full_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="full_name"                data-endpoint="PATCHapi-v1-me"
               value="Budi Santoso"
               data-component="body">
    <br>
<p>Nama lengkap pengguna. Example: <code>Budi Santoso</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>university</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="university"                data-endpoint="PATCHapi-v1-me"
               value="Universitas Indonesia"
               data-component="body">
    <br>
<p>Nama universitas. Example: <code>Universitas Indonesia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>major</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="major"                data-endpoint="PATCHapi-v1-me"
               value="Informatika"
               data-component="body">
    <br>
<p>Program studi. Example: <code>Informatika</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>semester</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="semester"                data-endpoint="PATCHapi-v1-me"
               value="6"
               data-component="body">
    <br>
<p>Semester saat ini, antara 1 dan 20. Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>graduation_year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="graduation_year"                data-endpoint="PATCHapi-v1-me"
               value="2027"
               data-component="body">
    <br>
<p>Tahun kelulusan, antara 2000 dan 2100. Example: <code>2027</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>target_career_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="target_career_id"                data-endpoint="PATCHapi-v1-me"
               value="1"
               data-component="body">
    <br>
<p>ID career tujuan. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>target_timeline_months</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="target_timeline_months"                data-endpoint="PATCHapi-v1-me"
               value="12"
               data-component="body">
    <br>
<p>Target waktu belajar dalam bulan. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>github_username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="github_username"                data-endpoint="PATCHapi-v1-me"
               value="budisantoso"
               data-component="body">
    <br>
<p>Username GitHub pengguna. Example: <code>budisantoso</code></p>
        </div>
        </form>

                <h1 id="user-skills">User - Skills</h1>

    

                                <h2 id="user-skills-GETapi-v1-me-skills">GET My Skills</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil seluruh skill milik pengguna yang sedang terautentikasi beserta detail skill-nya.</p>

<span id="example-requests-GETapi-v1-me-skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/me/skills" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/me/skills"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-me-skills">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-me-skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-me-skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-me-skills"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-me-skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-me-skills">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-me-skills" data-method="GET"
      data-path="api/v1/me/skills"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-me-skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-me-skills"
                    onclick="tryItOut('GETapi-v1-me-skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-me-skills"
                    onclick="cancelTryOut('GETapi-v1-me-skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-me-skills"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/me/skills</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-me-skills"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-me-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-me-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-skills-POSTapi-v1-me-skills">POST Save My Skill</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menambah atau memperbarui skill pengguna. Kombinasi pengguna dan skill bersifat unik.</p>

<span id="example-requests-POSTapi-v1-me-skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/me/skills" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"skill_id\": 3,
    \"level\": 4,
    \"confidence\": 80,
    \"source\": \"self\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/me/skills"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "skill_id": 3,
    "level": 4,
    "confidence": 80,
    "source": "self"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-me-skills">
</span>
<span id="execution-results-POSTapi-v1-me-skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-me-skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-me-skills"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-me-skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-me-skills">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-me-skills" data-method="POST"
      data-path="api/v1/me/skills"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-me-skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-me-skills"
                    onclick="tryItOut('POSTapi-v1-me-skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-me-skills"
                    onclick="cancelTryOut('POSTapi-v1-me-skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-me-skills"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/me/skills</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-me-skills"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-me-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-me-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill_id"                data-endpoint="POSTapi-v1-me-skills"
               value="3"
               data-component="body">
    <br>
<p>ID skill. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="level"                data-endpoint="POSTapi-v1-me-skills"
               value="4"
               data-component="body">
    <br>
<p>Level skill antara 0 dan 5. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>confidence</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="confidence"                data-endpoint="POSTapi-v1-me-skills"
               value="80"
               data-component="body">
    <br>
<p>Tingkat kepercayaan antara 0 dan 100. Example: <code>80</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>source</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="source"                data-endpoint="POSTapi-v1-me-skills"
               value="self"
               data-component="body">
    <br>
<p>Sumber penilaian: self, scenario, atau github. Example: <code>self</code></p>
        </div>
        </form>

                <h1 id="user-onboarding">User - Onboarding</h1>

    

                                <h2 id="user-onboarding-POSTapi-v1-onboarding">POST Complete Onboarding</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menyimpan career tujuan, target waktu, dan skill awal pengguna, kemudian membuat
roadmap pertama pengguna.</p>

<span id="example-requests-POSTapi-v1-onboarding">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/onboarding" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"target_career_id\": 1,
    \"target_timeline_months\": 12,
    \"skills\": [
        {
            \"skill_id\": 3,
            \"level\": 40
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/onboarding"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "target_career_id": 1,
    "target_timeline_months": 12,
    "skills": [
        {
            "skill_id": 3,
            "level": 40
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-onboarding">
</span>
<span id="execution-results-POSTapi-v1-onboarding" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-onboarding"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-onboarding"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-onboarding" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-onboarding">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-onboarding" data-method="POST"
      data-path="api/v1/onboarding"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-onboarding', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-onboarding"
                    onclick="tryItOut('POSTapi-v1-onboarding');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-onboarding"
                    onclick="cancelTryOut('POSTapi-v1-onboarding');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-onboarding"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/onboarding</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-onboarding"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-onboarding"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-onboarding"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>target_career_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="target_career_id"                data-endpoint="POSTapi-v1-onboarding"
               value="1"
               data-component="body">
    <br>
<p>ID career tujuan. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>target_timeline_months</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="target_timeline_months"                data-endpoint="POSTapi-v1-onboarding"
               value="12"
               data-component="body">
    <br>
<p>Target waktu belajar dalam bulan. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>skills</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Daftar skill awal pengguna.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skills.0.skill_id"                data-endpoint="POSTapi-v1-onboarding"
               value="3"
               data-component="body">
    <br>
<p>ID skill. Example: <code>3</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skills.0.level"                data-endpoint="POSTapi-v1-onboarding"
               value="40"
               data-component="body">
    <br>
<p>Level skill antara 0 dan 100. Example: <code>40</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                <h1 id="user-assessment">User - Assessment</h1>

    

                                <h2 id="user-assessment-GETapi-v1-assessment-questions">GET Assessment Questions</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil seluruh pertanyaan assessment beserta skill yang terkait.</p>

<span id="example-requests-GETapi-v1-assessment-questions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/assessment/questions" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/assessment/questions"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-assessment-questions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-assessment-questions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-assessment-questions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-assessment-questions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-assessment-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-assessment-questions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-assessment-questions" data-method="GET"
      data-path="api/v1/assessment/questions"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-assessment-questions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-assessment-questions"
                    onclick="tryItOut('GETapi-v1-assessment-questions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-assessment-questions"
                    onclick="cancelTryOut('GETapi-v1-assessment-questions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-assessment-questions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/assessment/questions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-assessment-questions"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-assessment-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-assessment-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-assessment-POSTapi-v1-assessment-submit">POST Submit Assessment</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menyimpan jawaban assessment, menghitung nilai rata-rata, memperbarui skill pengguna,
dan memberikan achievement first_assessment jika achievement tersebut baru terbuka.</p>

<span id="example-requests-POSTapi-v1-assessment-submit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/assessment/submit" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"answers\": [
        {
            \"skill_id\": 3,
            \"scenario_score\": 80,
            \"confidence\": 75
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/assessment/submit"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "answers": [
        {
            "skill_id": 3,
            "scenario_score": 80,
            "confidence": 75
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-assessment-submit">
</span>
<span id="execution-results-POSTapi-v1-assessment-submit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-assessment-submit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-assessment-submit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-assessment-submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-assessment-submit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-assessment-submit" data-method="POST"
      data-path="api/v1/assessment/submit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-assessment-submit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-assessment-submit"
                    onclick="tryItOut('POSTapi-v1-assessment-submit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-assessment-submit"
                    onclick="cancelTryOut('POSTapi-v1-assessment-submit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-assessment-submit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/assessment/submit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-assessment-submit"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-assessment-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-assessment-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>answers</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Daftar jawaban assessment.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="answers.0.skill_id"                data-endpoint="POSTapi-v1-assessment-submit"
               value="3"
               data-component="body">
    <br>
<p>ID skill dari pertanyaan. Example: <code>3</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>scenario_score</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="answers.0.scenario_score"                data-endpoint="POSTapi-v1-assessment-submit"
               value="80"
               data-component="body">
    <br>
<p>Nilai skenario antara 0 dan 100. Example: <code>80</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>confidence</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="answers.0.confidence"                data-endpoint="POSTapi-v1-assessment-submit"
               value="75"
               data-component="body">
    <br>
<p>Tingkat kepercayaan antara 0 dan 100. Example: <code>75</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                <h1 id="user-skill-gap-readiness">User - Skill Gap & Readiness</h1>

    

                                <h2 id="user-skill-gap-readiness-GETapi-v1-skill-gap">GET Skill Gap</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menghitung daftar skill yang masih berada di bawah level yang dibutuhkan career tujuan,
lengkap dengan nilai gap, demand, kategori, dan prioritas belajar.</p>

<span id="example-requests-GETapi-v1-skill-gap">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/skill-gap" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/skill-gap"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-skill-gap">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-skill-gap" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-skill-gap"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-skill-gap"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-skill-gap" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-skill-gap">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-skill-gap" data-method="GET"
      data-path="api/v1/skill-gap"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-skill-gap', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-skill-gap"
                    onclick="tryItOut('GETapi-v1-skill-gap');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-skill-gap"
                    onclick="cancelTryOut('GETapi-v1-skill-gap');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-skill-gap"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/skill-gap</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-skill-gap"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-skill-gap"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-skill-gap"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-skill-gap-readiness-GETapi-v1-readiness-score">GET Readiness Score</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menghitung skor kesiapan pengguna dari technical skill, soft skill, portfolio,
pengalaman, dan hasil assessment berdasarkan bobot scoring yang sedang aktif.</p>

<span id="example-requests-GETapi-v1-readiness-score">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/readiness-score" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/readiness-score"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-readiness-score">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-readiness-score" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-readiness-score"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-readiness-score"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-readiness-score" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-readiness-score">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-readiness-score" data-method="GET"
      data-path="api/v1/readiness-score"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-readiness-score', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-readiness-score"
                    onclick="tryItOut('GETapi-v1-readiness-score');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-readiness-score"
                    onclick="cancelTryOut('GETapi-v1-readiness-score');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-readiness-score"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/readiness-score</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-readiness-score"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-readiness-score"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-readiness-score"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="user-roadmap">User - Roadmap</h1>

    

                                <h2 id="user-roadmap-POSTapi-v1-roadmap-generate">POST Generate Roadmap</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Membuat atau membuat ulang roadmap berdasarkan career tujuan, skill pengguna,
dan kesenjangan level skill. Endpoint ini gagal jika pengguna belum memilih career tujuan.</p>

<span id="example-requests-POSTapi-v1-roadmap-generate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/roadmap/generate" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/roadmap/generate"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-roadmap-generate">
</span>
<span id="execution-results-POSTapi-v1-roadmap-generate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-roadmap-generate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-roadmap-generate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-roadmap-generate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-roadmap-generate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-roadmap-generate" data-method="POST"
      data-path="api/v1/roadmap/generate"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-roadmap-generate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-roadmap-generate"
                    onclick="tryItOut('POSTapi-v1-roadmap-generate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-roadmap-generate"
                    onclick="cancelTryOut('POSTapi-v1-roadmap-generate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-roadmap-generate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/roadmap/generate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-roadmap-generate"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-roadmap-generate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-roadmap-generate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-roadmap-GETapi-v1-roadmap">GET My Roadmap</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil roadmap pengguna beserta career tujuan dan seluruh fase roadmap.</p>

<span id="example-requests-GETapi-v1-roadmap">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/roadmap" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/roadmap"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-roadmap">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-roadmap" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-roadmap"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-roadmap"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-roadmap" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-roadmap">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-roadmap" data-method="GET"
      data-path="api/v1/roadmap"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-roadmap', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-roadmap"
                    onclick="tryItOut('GETapi-v1-roadmap');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-roadmap"
                    onclick="cancelTryOut('GETapi-v1-roadmap');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-roadmap"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/roadmap</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-roadmap"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-roadmap"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-roadmap"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-roadmap-PATCHapi-v1-roadmap-phases--id-">PATCH Update Roadmap Phase</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Memperbarui status fase roadmap milik pengguna yang sedang terautentikasi.</p>

<span id="example-requests-PATCHapi-v1-roadmap-phases--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://skillbridge.test/api/v1/roadmap/phases/1" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"in_progress\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/roadmap/phases/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "in_progress"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-roadmap-phases--id-">
</span>
<span id="execution-results-PATCHapi-v1-roadmap-phases--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-roadmap-phases--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-roadmap-phases--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-roadmap-phases--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-roadmap-phases--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-roadmap-phases--id-" data-method="PATCH"
      data-path="api/v1/roadmap/phases/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-roadmap-phases--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-roadmap-phases--id-"
                    onclick="tryItOut('PATCHapi-v1-roadmap-phases--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-roadmap-phases--id-"
                    onclick="cancelTryOut('PATCHapi-v1-roadmap-phases--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-roadmap-phases--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/roadmap/phases/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-roadmap-phases--id-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-roadmap-phases--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-roadmap-phases--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-v1-roadmap-phases--id-"
               value="1"
               data-component="url">
    <br>
<p>ID fase roadmap. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-v1-roadmap-phases--id-"
               value="in_progress"
               data-component="body">
    <br>
<p>Status fase: not_started, in_progress, atau completed. Example: <code>in_progress</code></p>
        </div>
        </form>

                <h1 id="user-portfolio">User - Portfolio</h1>

    

                                <h2 id="user-portfolio-GETapi-v1-portfolio">GET Portfolio Checklist</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil seluruh item checklist portfolio beserta status penyelesaian pengguna.</p>

<span id="example-requests-GETapi-v1-portfolio">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/portfolio" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/portfolio"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-portfolio">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-portfolio" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-portfolio"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-portfolio"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-portfolio" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-portfolio">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-portfolio" data-method="GET"
      data-path="api/v1/portfolio"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-portfolio', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-portfolio"
                    onclick="tryItOut('GETapi-v1-portfolio');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-portfolio"
                    onclick="cancelTryOut('GETapi-v1-portfolio');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-portfolio"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/portfolio</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-portfolio"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-portfolio"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-portfolio"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-portfolio-PATCHapi-v1-portfolio-checklist--item_code-">PATCH Update Portfolio Checklist</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menandai item checklist portfolio sebagai selesai atau belum selesai.</p>

<span id="example-requests-PATCHapi-v1-portfolio-checklist--item_code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://skillbridge.test/api/v1/portfolio/checklist/github_profile" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"done\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/portfolio/checklist/github_profile"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "done": true
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-portfolio-checklist--item_code-">
</span>
<span id="execution-results-PATCHapi-v1-portfolio-checklist--item_code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-portfolio-checklist--item_code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-portfolio-checklist--item_code-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-portfolio-checklist--item_code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-portfolio-checklist--item_code-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-portfolio-checklist--item_code-" data-method="PATCH"
      data-path="api/v1/portfolio/checklist/{item_code}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-portfolio-checklist--item_code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-portfolio-checklist--item_code-"
                    onclick="tryItOut('PATCHapi-v1-portfolio-checklist--item_code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-portfolio-checklist--item_code-"
                    onclick="cancelTryOut('PATCHapi-v1-portfolio-checklist--item_code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-portfolio-checklist--item_code-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/portfolio/checklist/{item_code}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>item_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="item_code"                data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-"
               value="github_profile"
               data-component="url">
    <br>
<p>Kode item checklist portfolio. Example: <code>github_profile</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>done</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-" style="display: none">
            <input type="radio" name="done"
                   value="true"
                   data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-" style="display: none">
            <input type="radio" name="done"
                   value="false"
                   data-endpoint="PATCHapi-v1-portfolio-checklist--item_code-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Status selesai item. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="user-portfolio-GETapi-v1-portfolio-certificates">GET My Certificates</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil seluruh sertifikat milik pengguna yang sedang terautentikasi.</p>

<span id="example-requests-GETapi-v1-portfolio-certificates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/portfolio/certificates" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/portfolio/certificates"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-portfolio-certificates">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-portfolio-certificates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-portfolio-certificates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-portfolio-certificates"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-portfolio-certificates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-portfolio-certificates">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-portfolio-certificates" data-method="GET"
      data-path="api/v1/portfolio/certificates"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-portfolio-certificates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-portfolio-certificates"
                    onclick="tryItOut('GETapi-v1-portfolio-certificates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-portfolio-certificates"
                    onclick="cancelTryOut('GETapi-v1-portfolio-certificates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-portfolio-certificates"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/portfolio/certificates</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-portfolio-certificates"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-portfolio-certificates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-portfolio-certificates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-portfolio-POSTapi-v1-portfolio-certificates">POST Add Certificate</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menambahkan sertifikat baru ke portfolio pengguna.</p>

<span id="example-requests-POSTapi-v1-portfolio-certificates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/portfolio/certificates" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"AWS Certified Cloud Practitioner\",
    \"issuer\": \"Amazon Web Services\",
    \"year\": 2025
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/portfolio/certificates"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "AWS Certified Cloud Practitioner",
    "issuer": "Amazon Web Services",
    "year": 2025
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-portfolio-certificates">
</span>
<span id="execution-results-POSTapi-v1-portfolio-certificates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-portfolio-certificates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-portfolio-certificates"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-portfolio-certificates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-portfolio-certificates">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-portfolio-certificates" data-method="POST"
      data-path="api/v1/portfolio/certificates"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-portfolio-certificates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-portfolio-certificates"
                    onclick="tryItOut('POSTapi-v1-portfolio-certificates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-portfolio-certificates"
                    onclick="cancelTryOut('POSTapi-v1-portfolio-certificates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-portfolio-certificates"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/portfolio/certificates</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-portfolio-certificates"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-portfolio-certificates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-portfolio-certificates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-portfolio-certificates"
               value="AWS Certified Cloud Practitioner"
               data-component="body">
    <br>
<p>Judul sertifikat. Example: <code>AWS Certified Cloud Practitioner</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>issuer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="issuer"                data-endpoint="POSTapi-v1-portfolio-certificates"
               value="Amazon Web Services"
               data-component="body">
    <br>
<p>Penerbit sertifikat. Example: <code>Amazon Web Services</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year"                data-endpoint="POSTapi-v1-portfolio-certificates"
               value="2025"
               data-component="body">
    <br>
<p>Tahun penerbitan sertifikat. Example: <code>2025</code></p>
        </div>
        </form>

                    <h2 id="user-portfolio-DELETEapi-v1-portfolio-certificates--id-">DELETE Delete Certificate</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menghapus sertifikat milik pengguna berdasarkan ID sertifikat.</p>

<span id="example-requests-DELETEapi-v1-portfolio-certificates--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://skillbridge.test/api/v1/portfolio/certificates/1" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/portfolio/certificates/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-portfolio-certificates--id-">
</span>
<span id="execution-results-DELETEapi-v1-portfolio-certificates--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-portfolio-certificates--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-portfolio-certificates--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-portfolio-certificates--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-portfolio-certificates--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-portfolio-certificates--id-" data-method="DELETE"
      data-path="api/v1/portfolio/certificates/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-portfolio-certificates--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-portfolio-certificates--id-"
                    onclick="tryItOut('DELETEapi-v1-portfolio-certificates--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-portfolio-certificates--id-"
                    onclick="cancelTryOut('DELETEapi-v1-portfolio-certificates--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-portfolio-certificates--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/portfolio/certificates/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-portfolio-certificates--id-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-portfolio-certificates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-portfolio-certificates--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-portfolio-certificates--id-"
               value="1"
               data-component="url">
    <br>
<p>ID sertifikat. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="user-portfolio-POSTapi-v1-portfolio-github-analyze">POST Analyze GitHub Portfolio</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil daftar repository publik dari GitHub berdasarkan username pengguna.</p>

<span id="example-requests-POSTapi-v1-portfolio-github-analyze">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/portfolio/github-analyze" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"github_username\": \"octocat\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/portfolio/github-analyze"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "github_username": "octocat"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-portfolio-github-analyze">
</span>
<span id="execution-results-POSTapi-v1-portfolio-github-analyze" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-portfolio-github-analyze"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-portfolio-github-analyze"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-portfolio-github-analyze" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-portfolio-github-analyze">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-portfolio-github-analyze" data-method="POST"
      data-path="api/v1/portfolio/github-analyze"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-portfolio-github-analyze', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-portfolio-github-analyze"
                    onclick="tryItOut('POSTapi-v1-portfolio-github-analyze');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-portfolio-github-analyze"
                    onclick="cancelTryOut('POSTapi-v1-portfolio-github-analyze');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-portfolio-github-analyze"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/portfolio/github-analyze</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-portfolio-github-analyze"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-portfolio-github-analyze"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-portfolio-github-analyze"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>github_username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="github_username"                data-endpoint="POSTapi-v1-portfolio-github-analyze"
               value="octocat"
               data-component="body">
    <br>
<p>Username GitHub yang akan dianalisis. Example: <code>octocat</code></p>
        </div>
        </form>

                <h1 id="user-progress-achievements">User - Progress & Achievements</h1>

    

                                <h2 id="user-progress-achievements-GETapi-v1-progress-history">GET Progress History</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil riwayat skor readiness dan snapshot skill pengguna, diurutkan dari yang terbaru.</p>

<span id="example-requests-GETapi-v1-progress-history">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/progress-history" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/progress-history"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-progress-history">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-progress-history" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-progress-history"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-progress-history"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-progress-history" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-progress-history">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-progress-history" data-method="GET"
      data-path="api/v1/progress-history"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-progress-history', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-progress-history"
                    onclick="tryItOut('GETapi-v1-progress-history');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-progress-history"
                    onclick="cancelTryOut('GETapi-v1-progress-history');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-progress-history"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/progress-history</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-progress-history"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-progress-history"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-progress-history"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-progress-achievements-GETapi-v1-achievements">GET Achievements</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil daftar achievement yang telah diperoleh pengguna, diurutkan dari yang terbaru.</p>

<span id="example-requests-GETapi-v1-achievements">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/achievements" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/achievements"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-achievements">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-achievements" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-achievements"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-achievements"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-achievements" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-achievements">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-achievements" data-method="GET"
      data-path="api/v1/achievements"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-achievements', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-achievements"
                    onclick="tryItOut('GETapi-v1-achievements');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-achievements"
                    onclick="cancelTryOut('GETapi-v1-achievements');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-achievements"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/achievements</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-achievements"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-achievements"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-achievements"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="admin-dashboard">Admin - Dashboard</h1>

    

                                <h2 id="admin-dashboard-GETapi-v1-admin-dashboard">GET Admin Dashboard</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan ringkasan dashboard admin berupa jumlah pengguna mahasiswa,
jumlah career, dan rata-rata readiness score.</p>

<span id="example-requests-GETapi-v1-admin-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/dashboard" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/dashboard"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-dashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-dashboard" data-method="GET"
      data-path="api/v1/admin/dashboard"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-dashboard"
                    onclick="tryItOut('GETapi-v1-admin-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-dashboard"
                    onclick="cancelTryOut('GETapi-v1-admin-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-dashboard"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="admin-career-management">Admin - Career Management</h1>

    

                                <h2 id="admin-career-management-GETapi-v1-admin-careers">GET Admin Careers</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan seluruh career untuk kebutuhan administrasi,
termasuk jumlah skill yang diwajibkan pada setiap career.</p>

<span id="example-requests-GETapi-v1-admin-careers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/careers" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/careers"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-careers">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-careers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-careers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-careers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-careers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-careers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-careers" data-method="GET"
      data-path="api/v1/admin/careers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-careers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-careers"
                    onclick="tryItOut('GETapi-v1-admin-careers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-careers"
                    onclick="cancelTryOut('GETapi-v1-admin-careers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-careers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/careers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-careers"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-careers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-careers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="admin-career-management-POSTapi-v1-admin-careers">POST Admin Career</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menambahkan career baru beserta daftar skill yang dibutuhkan.
Slug career dibuat otomatis dari nama career dan dibuat unik jika sudah digunakan.</p>

<span id="example-requests-POSTapi-v1-admin-careers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/admin/careers" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Backend Developer\",
    \"category\": \"technology\",
    \"difficulty\": \"intermediate\",
    \"industry_demand\": 80,
    \"job_sample_size\": 150,
    \"remote_friendly\": true,
    \"short_description\": \"Membangun layanan backend yang scalable.\",
    \"description\": \"Backend developer merancang dan mengembangkan layanan server.\",
    \"responsibilities\": [
        \"Membangun API\"
    ],
    \"tools\": [
        \"Laravel\",
        \"PostgreSQL\"
    ],
    \"required_skills\": [
        {
            \"skill_id\": 3,
            \"level\": 70,
            \"importance\": \"high\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/careers"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Backend Developer",
    "category": "technology",
    "difficulty": "intermediate",
    "industry_demand": 80,
    "job_sample_size": 150,
    "remote_friendly": true,
    "short_description": "Membangun layanan backend yang scalable.",
    "description": "Backend developer merancang dan mengembangkan layanan server.",
    "responsibilities": [
        "Membangun API"
    ],
    "tools": [
        "Laravel",
        "PostgreSQL"
    ],
    "required_skills": [
        {
            "skill_id": 3,
            "level": 70,
            "importance": "high"
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-careers">
</span>
<span id="execution-results-POSTapi-v1-admin-careers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-careers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-careers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-careers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-careers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-careers" data-method="POST"
      data-path="api/v1/admin/careers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-careers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-careers"
                    onclick="tryItOut('POSTapi-v1-admin-careers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-careers"
                    onclick="cancelTryOut('POSTapi-v1-admin-careers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-careers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/careers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-careers"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-careers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-careers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-careers"
               value="Backend Developer"
               data-component="body">
    <br>
<p>Nama career. Example: <code>Backend Developer</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-v1-admin-careers"
               value="technology"
               data-component="body">
    <br>
<p>Kategori career. Example: <code>technology</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>difficulty</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="difficulty"                data-endpoint="POSTapi-v1-admin-careers"
               value="intermediate"
               data-component="body">
    <br>
<p>Tingkat kesulitan career. Example: <code>intermediate</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>industry_demand</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="industry_demand"                data-endpoint="POSTapi-v1-admin-careers"
               value="80"
               data-component="body">
    <br>
<p>Persentase demand antara 0 dan 100. Example: <code>80</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>job_sample_size</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="job_sample_size"                data-endpoint="POSTapi-v1-admin-careers"
               value="150"
               data-component="body">
    <br>
<p>Jumlah sampel lowongan. Example: <code>150</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remote_friendly</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-admin-careers" style="display: none">
            <input type="radio" name="remote_friendly"
                   value="true"
                   data-endpoint="POSTapi-v1-admin-careers"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-admin-careers" style="display: none">
            <input type="radio" name="remote_friendly"
                   value="false"
                   data-endpoint="POSTapi-v1-admin-careers"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Apakah career mendukung kerja remote. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>short_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="short_description"                data-endpoint="POSTapi-v1-admin-careers"
               value="Membangun layanan backend yang scalable."
               data-component="body">
    <br>
<p>Ringkasan singkat career. Example: <code>Membangun layanan backend yang scalable.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-admin-careers"
               value="Backend developer merancang dan mengembangkan layanan server."
               data-component="body">
    <br>
<p>Deskripsi lengkap career. Example: <code>Backend developer merancang dan mengembangkan layanan server.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>responsibilities</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="responsibilities[0]"                data-endpoint="POSTapi-v1-admin-careers"
               data-component="body">
        <input type="text" style="display: none"
               name="responsibilities[1]"                data-endpoint="POSTapi-v1-admin-careers"
               data-component="body">
    <br>
<p>Daftar tanggung jawab career.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tools</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tools[0]"                data-endpoint="POSTapi-v1-admin-careers"
               data-component="body">
        <input type="text" style="display: none"
               name="tools[1]"                data-endpoint="POSTapi-v1-admin-careers"
               data-component="body">
    <br>
<p>Daftar tools yang umum digunakan.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>required_skills</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>
<p>Daftar skill yang diwajibkan.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="required_skills.0.skill_id"                data-endpoint="POSTapi-v1-admin-careers"
               value="3"
               data-component="body">
    <br>
<p>ID skill. Example: <code>3</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="required_skills.0.level"                data-endpoint="POSTapi-v1-admin-careers"
               value="70"
               data-component="body">
    <br>
<p>Level skill antara 0 dan 100. Example: <code>70</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>importance</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="required_skills.0.importance"                data-endpoint="POSTapi-v1-admin-careers"
               value="high"
               data-component="body">
    <br>
<p>Tingkat kepentingan skill. Example: <code>high</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="admin-career-management-PATCHapi-v1-admin-careers--career_id-">PATCH Admin Career</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Memperbarui data career dan, jika dikirim, mengganti daftar skill yang dibutuhkan.
Semua field body bersifat opsional.</p>

<span id="example-requests-PATCHapi-v1-admin-careers--career_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://skillbridge.test/api/v1/admin/careers/1" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Senior Backend Developer\",
    \"category\": \"technology\",
    \"difficulty\": \"advanced\",
    \"industry_demand\": 85,
    \"job_sample_size\": 200,
    \"remote_friendly\": true,
    \"short_description\": \"Mengembangkan sistem backend berskala besar.\",
    \"description\": \"Career untuk pengembangan layanan server dan API.\",
    \"responsibilities\": [
        \"Merancang arsitektur layanan\"
    ],
    \"tools\": [
        \"Laravel\",
        \"Redis\"
    ],
    \"required_skills\": [
        {
            \"skill_id\": 3,
            \"level\": 80,
            \"importance\": \"high\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/careers/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Senior Backend Developer",
    "category": "technology",
    "difficulty": "advanced",
    "industry_demand": 85,
    "job_sample_size": 200,
    "remote_friendly": true,
    "short_description": "Mengembangkan sistem backend berskala besar.",
    "description": "Career untuk pengembangan layanan server dan API.",
    "responsibilities": [
        "Merancang arsitektur layanan"
    ],
    "tools": [
        "Laravel",
        "Redis"
    ],
    "required_skills": [
        {
            "skill_id": 3,
            "level": 80,
            "importance": "high"
        }
    ]
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-admin-careers--career_id-">
</span>
<span id="execution-results-PATCHapi-v1-admin-careers--career_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-admin-careers--career_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-admin-careers--career_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-admin-careers--career_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-admin-careers--career_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-admin-careers--career_id-" data-method="PATCH"
      data-path="api/v1/admin/careers/{career_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-admin-careers--career_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-admin-careers--career_id-"
                    onclick="tryItOut('PATCHapi-v1-admin-careers--career_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-admin-careers--career_id-"
                    onclick="cancelTryOut('PATCHapi-v1-admin-careers--career_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-admin-careers--career_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/careers/{career_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>career_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="career_id"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the career. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>career</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="career"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="1"
               data-component="url">
    <br>
<p>ID career. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="Senior Backend Developer"
               data-component="body">
    <br>
<p>Nama career. Example: <code>Senior Backend Developer</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="technology"
               data-component="body">
    <br>
<p>Kategori career. Example: <code>technology</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>difficulty</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="difficulty"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="advanced"
               data-component="body">
    <br>
<p>Tingkat kesulitan career. Example: <code>advanced</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>industry_demand</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="industry_demand"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="85"
               data-component="body">
    <br>
<p>Persentase demand antara 0 dan 100. Example: <code>85</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>job_sample_size</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="job_sample_size"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="200"
               data-component="body">
    <br>
<p>Jumlah sampel lowongan. Example: <code>200</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remote_friendly</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-v1-admin-careers--career_id-" style="display: none">
            <input type="radio" name="remote_friendly"
                   value="true"
                   data-endpoint="PATCHapi-v1-admin-careers--career_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-v1-admin-careers--career_id-" style="display: none">
            <input type="radio" name="remote_friendly"
                   value="false"
                   data-endpoint="PATCHapi-v1-admin-careers--career_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Apakah career mendukung kerja remote. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>short_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="short_description"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="Mengembangkan sistem backend berskala besar."
               data-component="body">
    <br>
<p>Ringkasan singkat career. Example: <code>Mengembangkan sistem backend berskala besar.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="Career untuk pengembangan layanan server dan API."
               data-component="body">
    <br>
<p>Deskripsi lengkap career. Example: <code>Career untuk pengembangan layanan server dan API.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>responsibilities</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="responsibilities[0]"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               data-component="body">
        <input type="text" style="display: none"
               name="responsibilities[1]"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               data-component="body">
    <br>
<p>Daftar tanggung jawab career.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tools</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tools[0]"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               data-component="body">
        <input type="text" style="display: none"
               name="tools[1]"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               data-component="body">
    <br>
<p>Daftar tools yang umum digunakan.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>required_skills</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>
<p>Daftar skill yang diwajibkan. Jika dikirim, daftar lama akan diganti.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="required_skills.0.skill_id"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="3"
               data-component="body">
    <br>
<p>ID skill. Example: <code>3</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="required_skills.0.level"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="80"
               data-component="body">
    <br>
<p>Level skill antara 0 dan 100. Example: <code>80</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>importance</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="required_skills.0.importance"                data-endpoint="PATCHapi-v1-admin-careers--career_id-"
               value="high"
               data-component="body">
    <br>
<p>Tingkat kepentingan skill. Example: <code>high</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="admin-career-management-DELETEapi-v1-admin-careers--career_id-">DELETE Admin Career</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menghapus career berdasarkan ID career.
Relasi skill career ikut ditangani oleh konfigurasi foreign key database.</p>

<span id="example-requests-DELETEapi-v1-admin-careers--career_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://skillbridge.test/api/v1/admin/careers/1" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/careers/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-careers--career_id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-careers--career_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-careers--career_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-careers--career_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-careers--career_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-careers--career_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-careers--career_id-" data-method="DELETE"
      data-path="api/v1/admin/careers/{career_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-careers--career_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-careers--career_id-"
                    onclick="tryItOut('DELETEapi-v1-admin-careers--career_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-careers--career_id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-careers--career_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-careers--career_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/careers/{career_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-admin-careers--career_id-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-careers--career_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-careers--career_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>career_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="career_id"                data-endpoint="DELETEapi-v1-admin-careers--career_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the career. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>career</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="career"                data-endpoint="DELETEapi-v1-admin-careers--career_id-"
               value="1"
               data-component="url">
    <br>
<p>ID career. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="admin-skill-management">Admin - Skill Management</h1>

    

                                <h2 id="admin-skill-management-GETapi-v1-admin-skills">GET Admin Skills</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan seluruh skill yang tersedia untuk kebutuhan administrasi taxonomy.</p>

<span id="example-requests-GETapi-v1-admin-skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/skills" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/skills"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-skills">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-skills"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-skills">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-skills" data-method="GET"
      data-path="api/v1/admin/skills"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-skills"
                    onclick="tryItOut('GETapi-v1-admin-skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-skills"
                    onclick="cancelTryOut('GETapi-v1-admin-skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-skills"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/skills</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-skills"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="admin-skill-management-POSTapi-v1-admin-skills">POST Admin Skill</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menambahkan skill baru ke taxonomy skill.</p>

<span id="example-requests-POSTapi-v1-admin-skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/admin/skills" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"php\",
    \"name\": \"PHP\",
    \"category\": \"technical\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/skills"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "php",
    "name": "PHP",
    "category": "technical"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-skills">
</span>
<span id="execution-results-POSTapi-v1-admin-skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-skills"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-skills">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-skills" data-method="POST"
      data-path="api/v1/admin/skills"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-skills"
                    onclick="tryItOut('POSTapi-v1-admin-skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-skills"
                    onclick="cancelTryOut('POSTapi-v1-admin-skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-skills"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/skills</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-skills"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-admin-skills"
               value="php"
               data-component="body">
    <br>
<p>Kode unik skill. Example: <code>php</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-skills"
               value="PHP"
               data-component="body">
    <br>
<p>Nama skill. Example: <code>PHP</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-v1-admin-skills"
               value="technical"
               data-component="body">
    <br>
<p>Kategori skill: technical atau soft. Example: <code>technical</code></p>
        </div>
        </form>

                    <h2 id="admin-skill-management-PATCHapi-v1-admin-skills--skill_id-">PATCH Admin Skill</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Memperbarui data skill yang sudah ada. Semua field bersifat opsional.</p>

<span id="example-requests-PATCHapi-v1-admin-skills--skill_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://skillbridge.test/api/v1/admin/skills/1" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"php\",
    \"name\": \"PHP\",
    \"category\": \"technical\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/skills/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "php",
    "name": "PHP",
    "category": "technical"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-admin-skills--skill_id-">
</span>
<span id="execution-results-PATCHapi-v1-admin-skills--skill_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-admin-skills--skill_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-admin-skills--skill_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-admin-skills--skill_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-admin-skills--skill_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-admin-skills--skill_id-" data-method="PATCH"
      data-path="api/v1/admin/skills/{skill_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-admin-skills--skill_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-admin-skills--skill_id-"
                    onclick="tryItOut('PATCHapi-v1-admin-skills--skill_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-admin-skills--skill_id-"
                    onclick="cancelTryOut('PATCHapi-v1-admin-skills--skill_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-admin-skills--skill_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/skills/{skill_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill_id"                data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the skill. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>skill</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill"                data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="3"
               data-component="url">
    <br>
<p>ID skill. Example: <code>3</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="php"
               data-component="body">
    <br>
<p>Kode unik skill. Example: <code>php</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="PHP"
               data-component="body">
    <br>
<p>Nama skill. Example: <code>PHP</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="PATCHapi-v1-admin-skills--skill_id-"
               value="technical"
               data-component="body">
    <br>
<p>Kategori skill: technical atau soft. Example: <code>technical</code></p>
        </div>
        </form>

                    <h2 id="admin-skill-management-DELETEapi-v1-admin-skills--skill_id-">DELETE Admin Skill</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menghapus skill dari taxonomy.</p>

<span id="example-requests-DELETEapi-v1-admin-skills--skill_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://skillbridge.test/api/v1/admin/skills/1" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/skills/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-skills--skill_id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-skills--skill_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-skills--skill_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-skills--skill_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-skills--skill_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-skills--skill_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-skills--skill_id-" data-method="DELETE"
      data-path="api/v1/admin/skills/{skill_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-skills--skill_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-skills--skill_id-"
                    onclick="tryItOut('DELETEapi-v1-admin-skills--skill_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-skills--skill_id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-skills--skill_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-skills--skill_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/skills/{skill_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-admin-skills--skill_id-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-skills--skill_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-skills--skill_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill_id"                data-endpoint="DELETEapi-v1-admin-skills--skill_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the skill. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>skill</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill"                data-endpoint="DELETEapi-v1-admin-skills--skill_id-"
               value="3"
               data-component="url">
    <br>
<p>ID skill. Example: <code>3</code></p>
            </div>
                    </form>

                <h1 id="admin-industry-insight">Admin - Industry Insight</h1>

    

                                <h2 id="admin-industry-insight-GETapi-v1-admin-industry-insights">GET Admin Industry Insights</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan data industry insight global yang tersimpan untuk setiap skill.</p>

<span id="example-requests-GETapi-v1-admin-industry-insights">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/industry-insights" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/industry-insights"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-industry-insights">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-industry-insights" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-industry-insights"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-industry-insights"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-industry-insights" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-industry-insights">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-industry-insights" data-method="GET"
      data-path="api/v1/admin/industry-insights"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-industry-insights', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-industry-insights"
                    onclick="tryItOut('GETapi-v1-admin-industry-insights');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-industry-insights"
                    onclick="cancelTryOut('GETapi-v1-admin-industry-insights');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-industry-insights"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/industry-insights</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-industry-insights"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-industry-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-industry-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="admin-industry-insight-POSTapi-v1-admin-industry-insights">POST Admin Industry Insight</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Membuat atau memperbarui industry insight manual untuk satu skill.
Endpoint ini digunakan saat mode industry insight aplikasi adalah manual.</p>

<span id="example-requests-POSTapi-v1-admin-industry-insights">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/admin/industry-insights" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"skill_id\": 3,
    \"demand\": 75,
    \"trend\": \"up\",
    \"job_sample_size\": 120,
    \"period\": \"2026-09\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/industry-insights"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "skill_id": 3,
    "demand": 75,
    "trend": "up",
    "job_sample_size": 120,
    "period": "2026-09"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-industry-insights">
</span>
<span id="execution-results-POSTapi-v1-admin-industry-insights" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-industry-insights"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-industry-insights"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-industry-insights" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-industry-insights">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-industry-insights" data-method="POST"
      data-path="api/v1/admin/industry-insights"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-industry-insights', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-industry-insights"
                    onclick="tryItOut('POSTapi-v1-admin-industry-insights');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-industry-insights"
                    onclick="cancelTryOut('POSTapi-v1-admin-industry-insights');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-industry-insights"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/industry-insights</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-industry-insights"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-industry-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-industry-insights"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill_id"                data-endpoint="POSTapi-v1-admin-industry-insights"
               value="3"
               data-component="body">
    <br>
<p>ID skill. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>demand</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="demand"                data-endpoint="POSTapi-v1-admin-industry-insights"
               value="75"
               data-component="body">
    <br>
<p>Persentase demand antara 0 dan 100. Example: <code>75</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trend</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trend"                data-endpoint="POSTapi-v1-admin-industry-insights"
               value="up"
               data-component="body">
    <br>
<p>Arah tren demand. Example: <code>up</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>job_sample_size</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="job_sample_size"                data-endpoint="POSTapi-v1-admin-industry-insights"
               value="120"
               data-component="body">
    <br>
<p>Jumlah sampel lowongan. Example: <code>120</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>period</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="period"                data-endpoint="POSTapi-v1-admin-industry-insights"
               value="2026-09"
               data-component="body">
    <br>
<p>Periode data insight. Example: <code>2026-09</code></p>
        </div>
        </form>

                <h1 id="admin-learning-resources">Admin - Learning Resources</h1>

    

                                <h2 id="admin-learning-resources-GETapi-v1-admin-learning-resources">GET Learning Resources</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan seluruh resource pembelajaran yang tersimpan.</p>

<span id="example-requests-GETapi-v1-admin-learning-resources">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/learning-resources" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/learning-resources"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-learning-resources">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-learning-resources" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-learning-resources"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-learning-resources"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-learning-resources" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-learning-resources">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-learning-resources" data-method="GET"
      data-path="api/v1/admin/learning-resources"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-learning-resources', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-learning-resources"
                    onclick="tryItOut('GETapi-v1-admin-learning-resources');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-learning-resources"
                    onclick="cancelTryOut('GETapi-v1-admin-learning-resources');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-learning-resources"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/learning-resources</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-learning-resources"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-learning-resources"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-learning-resources"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="admin-learning-resources-POSTapi-v1-admin-learning-resources">POST Learning Resource</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menambahkan resource pembelajaran yang dikaitkan dengan sebuah skill.</p>

<span id="example-requests-POSTapi-v1-admin-learning-resources">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/admin/learning-resources" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"skill_id\": 3,
    \"title\": \"PHP Documentation\",
    \"provider\": \"PHP.net\",
    \"type\": \"documentation\",
    \"url\": \"https:\\/\\/www.php.net\\/docs.php\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/learning-resources"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "skill_id": 3,
    "title": "PHP Documentation",
    "provider": "PHP.net",
    "type": "documentation",
    "url": "https:\/\/www.php.net\/docs.php"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-learning-resources">
</span>
<span id="execution-results-POSTapi-v1-admin-learning-resources" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-learning-resources"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-learning-resources"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-learning-resources" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-learning-resources">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-learning-resources" data-method="POST"
      data-path="api/v1/admin/learning-resources"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-learning-resources', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-learning-resources"
                    onclick="tryItOut('POSTapi-v1-admin-learning-resources');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-learning-resources"
                    onclick="cancelTryOut('POSTapi-v1-admin-learning-resources');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-learning-resources"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/learning-resources</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-learning-resources"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-learning-resources"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-learning-resources"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>skill_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="skill_id"                data-endpoint="POSTapi-v1-admin-learning-resources"
               value="3"
               data-component="body">
    <br>
<p>ID skill. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-admin-learning-resources"
               value="PHP Documentation"
               data-component="body">
    <br>
<p>Judul resource. Example: <code>PHP Documentation</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-v1-admin-learning-resources"
               value="PHP.net"
               data-component="body">
    <br>
<p>Penyedia resource. Example: <code>PHP.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-v1-admin-learning-resources"
               value="documentation"
               data-component="body">
    <br>
<p>Jenis resource. Example: <code>documentation</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="url"                data-endpoint="POSTapi-v1-admin-learning-resources"
               value="https://www.php.net/docs.php"
               data-component="body">
    <br>
<p>URL resource yang valid. Example: <code>https://www.php.net/docs.php</code></p>
        </div>
        </form>

                    <h2 id="admin-learning-resources-DELETEapi-v1-admin-learning-resources--learningResource_id-">DELETE Learning Resource</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menghapus resource pembelajaran berdasarkan ID resource.</p>

<span id="example-requests-DELETEapi-v1-admin-learning-resources--learningResource_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://skillbridge.test/api/v1/admin/learning-resources/1" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/learning-resources/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-learning-resources--learningResource_id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-learning-resources--learningResource_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-learning-resources--learningResource_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-learning-resources--learningResource_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-learning-resources--learningResource_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-learning-resources--learningResource_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-learning-resources--learningResource_id-" data-method="DELETE"
      data-path="api/v1/admin/learning-resources/{learningResource_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-learning-resources--learningResource_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-learning-resources--learningResource_id-"
                    onclick="tryItOut('DELETEapi-v1-admin-learning-resources--learningResource_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-learning-resources--learningResource_id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-learning-resources--learningResource_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-learning-resources--learningResource_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/learning-resources/{learningResource_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-admin-learning-resources--learningResource_id-"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-learning-resources--learningResource_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-learning-resources--learningResource_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>learningResource_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="learningResource_id"                data-endpoint="DELETEapi-v1-admin-learning-resources--learningResource_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the learningResource. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>learningResource</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="learningResource"                data-endpoint="DELETEapi-v1-admin-learning-resources--learningResource_id-"
               value="1"
               data-component="url">
    <br>
<p>ID resource pembelajaran. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="admin-user-management">Admin - User Management</h1>

    

                                <h2 id="admin-user-management-GETapi-v1-admin-users">GET Admin Users</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan ringkasan seluruh pengguna mahasiswa, career tujuan, dan readiness score terbaru.</p>

<span id="example-requests-GETapi-v1-admin-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/users" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-users">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-users" data-method="GET"
      data-path="api/v1/admin/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-users"
                    onclick="tryItOut('GETapi-v1-admin-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-users"
                    onclick="cancelTryOut('GETapi-v1-admin-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-users"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="admin-analytics">Admin - Analytics</h1>

    

                                <h2 id="admin-analytics-GETapi-v1-admin-analytics">GET Admin Analytics</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan distribusi career tujuan mahasiswa dan distribusi kategori skill gap.</p>

<span id="example-requests-GETapi-v1-admin-analytics">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/analytics" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/analytics"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-analytics">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-analytics" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-analytics"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-analytics"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-analytics" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-analytics">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-analytics" data-method="GET"
      data-path="api/v1/admin/analytics"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-analytics', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-analytics"
                    onclick="tryItOut('GETapi-v1-admin-analytics');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-analytics"
                    onclick="cancelTryOut('GETapi-v1-admin-analytics');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-analytics"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/analytics</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-analytics"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-analytics"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-analytics"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="admin-scoring-settings">Admin - Scoring Settings</h1>

    

                                <h2 id="admin-scoring-settings-GETapi-v1-admin-scoring-settings">GET Scoring Settings</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil bobot komponen yang digunakan untuk menghitung readiness score.</p>

<span id="example-requests-GETapi-v1-admin-scoring-settings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/scoring-settings" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/scoring-settings"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-scoring-settings">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-scoring-settings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-scoring-settings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-scoring-settings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-scoring-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-scoring-settings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-scoring-settings" data-method="GET"
      data-path="api/v1/admin/scoring-settings"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-scoring-settings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-scoring-settings"
                    onclick="tryItOut('GETapi-v1-admin-scoring-settings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-scoring-settings"
                    onclick="cancelTryOut('GETapi-v1-admin-scoring-settings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-scoring-settings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/scoring-settings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-scoring-settings"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-scoring-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-scoring-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="admin-scoring-settings-PUTapi-v1-admin-scoring-settings">PUT Scoring Settings</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Memperbarui bobot readiness score. Total seluruh bobot wajib sama dengan 1.0.</p>

<span id="example-requests-PUTapi-v1-admin-scoring-settings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://skillbridge.test/api/v1/admin/scoring-settings" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"technical\": 0.3,
    \"soft\": 0.2,
    \"portfolio\": 0.2,
    \"experience\": 0.1,
    \"assessment\": 0.2
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/scoring-settings"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "technical": 0.3,
    "soft": 0.2,
    "portfolio": 0.2,
    "experience": 0.1,
    "assessment": 0.2
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-scoring-settings">
</span>
<span id="execution-results-PUTapi-v1-admin-scoring-settings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-scoring-settings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-scoring-settings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-scoring-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-scoring-settings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-scoring-settings" data-method="PUT"
      data-path="api/v1/admin/scoring-settings"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-scoring-settings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-scoring-settings"
                    onclick="tryItOut('PUTapi-v1-admin-scoring-settings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-scoring-settings"
                    onclick="cancelTryOut('PUTapi-v1-admin-scoring-settings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-scoring-settings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/scoring-settings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>technical</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="technical"                data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="0.3"
               data-component="body">
    <br>
<p>Bobot technical skill antara 0 dan 1. Example: <code>0.3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>soft</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="soft"                data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="0.2"
               data-component="body">
    <br>
<p>Bobot soft skill antara 0 dan 1. Example: <code>0.2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>portfolio</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="portfolio"                data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="0.2"
               data-component="body">
    <br>
<p>Bobot portfolio antara 0 dan 1. Example: <code>0.2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="experience"                data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="0.1"
               data-component="body">
    <br>
<p>Bobot pengalaman antara 0 dan 1. Example: <code>0.1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>assessment</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assessment"                data-endpoint="PUTapi-v1-admin-scoring-settings"
               value="0.2"
               data-component="body">
    <br>
<p>Bobot assessment antara 0 dan 1. Example: <code>0.2</code></p>
        </div>
        </form>

                <h1 id="admin-settings">Admin - Settings</h1>

    

                                <h2 id="admin-settings-PATCHapi-v1-admin-settings-industry-insight-mode">PATCH Update Industry Insight Mode</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengubah mode sumber industry insight antara otomatis dari pipeline scraping
dan manual dari input admin.</p>

<span id="example-requests-PATCHapi-v1-admin-settings-industry-insight-mode">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://skillbridge.test/api/v1/admin/settings/industry-insight-mode" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mode\": \"auto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/settings/industry-insight-mode"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mode": "auto"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-admin-settings-industry-insight-mode">
</span>
<span id="execution-results-PATCHapi-v1-admin-settings-industry-insight-mode" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-admin-settings-industry-insight-mode"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-admin-settings-industry-insight-mode"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-admin-settings-industry-insight-mode" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-admin-settings-industry-insight-mode">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-admin-settings-industry-insight-mode" data-method="PATCH"
      data-path="api/v1/admin/settings/industry-insight-mode"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-admin-settings-industry-insight-mode', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-admin-settings-industry-insight-mode"
                    onclick="tryItOut('PATCHapi-v1-admin-settings-industry-insight-mode');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-admin-settings-industry-insight-mode"
                    onclick="cancelTryOut('PATCHapi-v1-admin-settings-industry-insight-mode');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-admin-settings-industry-insight-mode"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/settings/industry-insight-mode</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-admin-settings-industry-insight-mode"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-admin-settings-industry-insight-mode"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-admin-settings-industry-insight-mode"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mode"                data-endpoint="PATCHapi-v1-admin-settings-industry-insight-mode"
               value="auto"
               data-component="body">
    <br>
<p>Mode insight: auto atau manual. Example: <code>auto</code></p>
        </div>
        </form>

                <h1 id="admin-scrape-runs">Admin - Scrape Runs</h1>

    

                                <h2 id="admin-scrape-runs-GETapi-v1-admin-scrape-runs">GET Scrape Runs</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Menampilkan riwayat proses scraping lowongan, diurutkan dari proses terbaru.</p>

<span id="example-requests-GETapi-v1-admin-scrape-runs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/v1/admin/scrape-runs" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/scrape-runs"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-scrape-runs">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;message&quot;: &quot;Unauthenticated.&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-admin-scrape-runs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-scrape-runs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-scrape-runs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-scrape-runs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-scrape-runs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-scrape-runs" data-method="GET"
      data-path="api/v1/admin/scrape-runs"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-scrape-runs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-scrape-runs"
                    onclick="tryItOut('GETapi-v1-admin-scrape-runs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-scrape-runs"
                    onclick="cancelTryOut('GETapi-v1-admin-scrape-runs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-scrape-runs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/scrape-runs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-admin-scrape-runs"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-scrape-runs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-scrape-runs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="admin-scrape-runs-POSTapi-v1-admin-scrape-runs-trigger">POST Trigger Scraping</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Membuat catatan proses scraping dan menjalankan command scraping lowongan.</p>

<span id="example-requests-POSTapi-v1-admin-scrape-runs-trigger">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://skillbridge.test/api/v1/admin/scrape-runs/trigger" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/v1/admin/scrape-runs/trigger"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-scrape-runs-trigger">
</span>
<span id="execution-results-POSTapi-v1-admin-scrape-runs-trigger" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-scrape-runs-trigger"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-scrape-runs-trigger"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-scrape-runs-trigger" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-scrape-runs-trigger">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-scrape-runs-trigger" data-method="POST"
      data-path="api/v1/admin/scrape-runs/trigger"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-scrape-runs-trigger', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-scrape-runs-trigger"
                    onclick="tryItOut('POSTapi-v1-admin-scrape-runs-trigger');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-scrape-runs-trigger"
                    onclick="cancelTryOut('POSTapi-v1-admin-scrape-runs-trigger');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-scrape-runs-trigger"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/scrape-runs/trigger</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-admin-scrape-runs-trigger"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-scrape-runs-trigger"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-scrape-runs-trigger"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="internal-skill-taxonomy">Internal - Skill Taxonomy</h1>

    

                                <h2 id="internal-skill-taxonomy-GETapi-internal-skills">GET Internal Skill Taxonomy</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Description: Mengambil taxonomy skill beserta kode, nama, dan aliases untuk kebutuhan
service internal seperti klasifikasi lowongan. (endpoint untuk ML)</p>

<span id="example-requests-GETapi-internal-skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/internal/skills" \
    --header "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/internal/skills"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-skills">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 401,
    &quot;message&quot;: &quot;Service token tidak valid&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-skills"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-skills">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-skills" data-method="GET"
      data-path="api/internal/skills"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-skills"
                    onclick="tryItOut('GETapi-internal-skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-skills"
                    onclick="cancelTryOut('GETapi-internal-skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-skills"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/skills</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-internal-skills"
               value="Bearer {YOUR_AUTH_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-skills"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Display Swagger API page.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://skillbridge.test/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://skillbridge.test/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;body&gt;
&lt;script src=&quot;oauth2-redirect.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
