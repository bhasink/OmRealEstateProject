<?php
/**
 * Created by PhpStorm.
 * User: karanbhasin
 * Date: 12/03/18
 * Time: 4:59 PM
 */
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('homeIndex'));
});
Breadcrumbs::register('ProjectDetails', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('homeIndex'));
});
Breadcrumbs::register('ProjectDetailsloc', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type,$slug) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('projectDetailss',[strtolower(str_replace(" ","-",$projectcity)),strtolower(str_replace(" ","-",$project_type)),$slug]));
    $breadcrumbs->push('Location', route('homeIndex'));

});

Breadcrumbs::register('ProjectDetailsNb', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type,$slug) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('projectDetailss',[strtolower(str_replace(" ","-",$projectcity)),strtolower(str_replace(" ","-",$project_type)),$slug]));
    $breadcrumbs->push('NearBy', route('homeIndex'));

});

Breadcrumbs::register('ProjectDetailsPropTypes', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type,$slug,$ptypes) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('projectDetailss',[strtolower(str_replace(" ","-",$projectcity)),strtolower(str_replace(" ","-",$project_type)),$slug]));
    $breadcrumbs->push($ptypes, route('homeIndex'));

});

Breadcrumbs::register('ProjectDetailsfplan', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type,$slug) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('projectDetailss',[strtolower(str_replace(" ","-",$projectcity)),strtolower(str_replace(" ","-",$project_type)),$slug]));
    $breadcrumbs->push('Floor Plans', route('homeIndex'));

});

Breadcrumbs::register('ProjectDetailsgallery', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type,$slug) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('projectDetailss',[strtolower(str_replace(" ","-",$projectcity)),strtolower(str_replace(" ","-",$project_type)),$slug]));
    $breadcrumbs->push('Gallery', route('homeIndex'));

});

Breadcrumbs::register('AboutUs', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About Us', route('aboutus'));

    $breadcrumbs->push($name, route('homeIndex'));

});
Breadcrumbs::register('career', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Career', route('career'));

    $breadcrumbs->push($name, route('homeIndex'));

});

Breadcrumbs::register('investors', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
//    $breadcrumbs->push('Investor', route('invannual'));
    $breadcrumbs->push($name, route('homeIndex'));
});

Breadcrumbs::register('stakeholder', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
//    $breadcrumbs->push('Investor', route('invannual'));
    $breadcrumbs->push($name, route('homeIndex'));
});

Breadcrumbs::register('investorsabout', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
//    $breadcrumbs->push('Investor', route('invannual'));
    $breadcrumbs->push('Annual Report', route('invannual'));
    $breadcrumbs->push($name, route('homeIndex'));
});

Breadcrumbs::register('corporategov', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
//    $breadcrumbs->push('Investor', route('invannual'));
    $breadcrumbs->push('Corporate Governance', route('corpgov'));
    $breadcrumbs->push($name, route('homeIndex'));
});

Breadcrumbs::register('stakeholderd', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
//    $breadcrumbs->push('Investor', route('invannual'));
    $breadcrumbs->push('Stakeholder Information', route('stakeinfo'));
    $breadcrumbs->push($name, route('homeIndex'));
});

Breadcrumbs::register('disclaimer', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Disclaimer', route('homeIndex'));

});

Breadcrumbs::register('emi', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('EMI Calculator', route('homeIndex'));

});

Breadcrumbs::register('currencyconvertor', function ($breadcrumbs, $link,$name) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Currency  Converter', route('homeIndex'));

});

Breadcrumbs::register('ProjectDetailscontact', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type,$slug) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('projectDetailss',[strtolower(str_replace(" ","-",$projectcity)),strtolower(str_replace(" ","-",$project_type)),$slug]));
    $breadcrumbs->push('Contact Us', route('homeIndex'));

});
Breadcrumbs::register('ProjectDetailslocation', function ($breadcrumbs, $ProjectDetails,$projectcity,$project_type,$location) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($project_type), route('projectByType',strtolower(str_replace(" ","-",$project_type))));
    $breadcrumbs->push(ucwords($ProjectDetails), route('homeIndex'));
    $breadcrumbs->push(ucwords($location), route('projectDetails',$projectcity,$project_type,$ProjectDetails));
});
Breadcrumbs::register('Projects', function ($breadcrumbs,$Project_s) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($Project_s, route('homeIndex'));
});
Breadcrumbs::register('ProjectsCategory', function ($breadcrumbs,$Project_cat) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($Project_cat), route('homeIndex'));
});
Breadcrumbs::register('ProjectsCity', function ($breadcrumbs,$Project_cat) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($Project_cat), route('homeIndex'));
});
Breadcrumbs::register('ProjectSearch', function ($breadcrumbs,$Project_cat,$projectcity,$projecttype) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('allProjects'));
    $breadcrumbs->push(ucwords($projectcity), route('projectByCity',strtolower(str_replace(" ","-",$projectcity))));
    $breadcrumbs->push(ucwords($projecttype), route('projectByType',strtolower(str_replace(" ","-",$projecttype))));
    $breadcrumbs->push(ucwords($Project_cat), route('homeIndex'));
});