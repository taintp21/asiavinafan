<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Illuminate\Support\Facades\Request;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('admin', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin'));
});

// Home > Blog
Breadcrumbs::for(ucfirst(Request::segment(2)), function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(ucfirst(Request::segment(2)), route(Request::segment(2)));
});

// Home > Blog > [Category]
Breadcrumbs::for(ucfirst(Request::segment(3)), function (BreadcrumbTrail $trail, $category) {
    $trail->parent(ucfirst(Request::segment(2)));
    $trail->push($category->title, route('category', $category));
});
