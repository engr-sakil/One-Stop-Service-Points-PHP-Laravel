<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//START ADMIN

Route::get('/admin', function () {
    return view('Admin.index');
});

Route::get('/project', function () {
    return view('Admin.project');
});

Route::get('/adminlogin', function () {
    return view('Admin.adminlogin');
});

Route::get('/addcostestimate', function () {
    return view('Admin.addcostestimate');
});
Route::post('/insertcost','CostestimateController@insertcost');
Route::get('/admincostestimate','CostestimateController@viewcost');
Route::get('/editcostestimate/{id}','CostestimateController@editcostinfo');
Route::put('/updatecostinfo/{id}','CostestimateController@updatecostinfo');



Route::get('/employee','EmployeeController@infoview');
Route::get('/addemployee', function () {
    return view('Admin.addemployee');
});
Route::post('/insert','EmployeeController@insert');

//Route::post('/edit','EmployeeController@editinfo');

Route::get('/editemployee/{id}','EmployeeController@editinfo');
Route::put('/editinfo/{id}','EmployeeController@updateinfo');
Route::get('/deleteemployee/{id}','EmployeeController@deleteinfo');



Route::get('/addministry', function () {
    return view('Admin.addministry');
});

Route::post('/ministryInfoInsert','MinistryController@ministryInfoInsert');

Route::get('/ministry','MinistryController@ministryInfoView');
Route::get('/editministry/{id}','MinistryController@editMinistryInfo');
Route::put('/updateMinistry/{id}','MinistryController@updateMinistryInfo');
Route::get('/deleteministry/{id}','MinistryController@deleteMinistryInfo');



//END ADMIN


//====================================START INVESTOR======================================================================================

Route::get('/investor', function () {

    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.index');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/investorlogout', function () {
    session()->forget('investorEmail');
    return view('Investor.login');
});



Route::get('/textiles', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.textiles');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/Tobacco', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.Tobacco');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});
Route::get('/Automobile', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.Automobile');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/Cement', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.Cement');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/Ceramics', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.Ceramics');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/Food_Beverage', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.Food_Beverage');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/Hospital', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.Hospital');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/Pharma', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.Pharma');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});

Route::get('/investorcostestimate','CostestimateController@investorviewcost');

Route::get('/feedback', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.feedback');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});
Route::get('/profile','InvestorinfoController@infoview');

Route::get('/investorlogin', function () {
    return view('Investor.login');
});
Route::get('/investorsignup', function () {
    return view('Investor.registration');
});

Route::post('/investorInfo','InvestorinfoController@investorInfo');
Route::post('/logininvestor','InvestorinfoController@logininvestor');
//END INVESTOR


Route::get('/contact', function () {
    if (session('investorEmail'))
    {
        if (session('investorPassword'))
        {
            return view('Investor.contact');}
        else{
            return view('Investor.login');}
    }
    else{
        return view('Investor.login');}
});



Route::post('/projactInfoInsert','ProjectController@projactInfoInsert');


//========================END INVESTOR=======================================================================




//========================START EMPLOYEE=====================================================================
Route::post('/loginemployee','EmployeeController@loginemployee');


Route::get('/employeeuser', function () {
    if (session('employeeEmail'))
    {
        if (session('employeePassword'))
        {
            return view('Employee.index');}
        else{
            return view('Employee.login');}
    }
    else{
        return view('Employee.login');}
});

Route::get('/employeelogout', function () {
    session()->forget('employeeEmail');
    return view('Employee.login');
});

Route::get('/employeelogin', function () {
    return view('Employee.login');
});

Route::get('/employeefeedback', function () {
    if (session('employeeEmail'))
    {
        if (session('employeePassword'))
        {
            return view('Employee.feedback');}
        else{
            return view('Employee.login');}
    }
    else{
        return view('Employee.login');}
});

Route::get('/employeeprofile', function () {
    if (session('employeeEmail'))
    {
        if (session('employeePassword'))
        {
            return view('Employee.profile');}
        else{
            return view('Employee.login');}
    }
    else{
        return view('Employee.login');}

});
Route::get('/employeecostestimate','CostestimateController@employeeviewcost');




Route::get('/employeeprojectrequest','EmployeeController@EmployeeRequestProjectInfoView');
Route::get('/employeependingproject','EmployeeController@EmployeePendingProjectInfoView');
Route::get('/employeeapprovedproject','EmployeeController@EmployeeApprovedProjectInfoView');
Route::get('/openproject/{id}','EmployeeController@EmployeeOpenProject');
Route::get('/updateTextilesMinistryFileStatus/{id}','EmployeeController@updateTextilesMinistryFileStatus');
Route::get('/updateEnvironmentMinistryFileStatus/{id}','EmployeeController@updateEnvironmentMinistryFileStatus');
Route::get('/updateforeignMinistryFileStatus/{id}','EmployeeController@updateforeignMinistryFileStatus');
Route::get('/updateplanningMinistryFileStatus/{id}','EmployeeController@updateplanningMinistryFileStatus');
Route::get('/employeepickedproject','EmployeeController@EmployeepickedProjectInfoView');
Route::get('/sendapproval/{id}','EmployeeController@TextilesMinistryFileStatus');
//end employee


//start ministry
Route::post('/loginministry','MinistryController@loginministry');
Route::get('/ministrylogout', function () {
    session()->forget('ministryEmail');
    return view('Ministry.login');
});


Route::get('/ministryprojectrequest','MinistryController@ministryRequestProjectInfoView');
Route::get('/ministryopenproject/{id}','MinistryController@ministryOpenProject');
Route::get('/ministryUpdateTextilesMinistryFileStatus/{id}','MinistryController@ministryUpdateTextilesMinistryFileStatus');
Route::get('/ministrypickedproject','MinistryController@ministrypickedProject');
Route::get('/ministryapprovedproject','MinistryController@ministryapprovedProject');

Route::get('/ministryuser', function () {
    if (session('ministryEmail'))
    {
        if (session('ministryPassword'))
        {
            return view('Ministry.index');
        }
        else{
            return view('Ministry.login');}
    }
    else{
        return view('Ministry.login');}
});

Route::get('/ministrylogin', function () {
    return view('Ministry.login');
});

Route::get('/osspcontact', function () {
    if (session('ministryEmail'))
    {
        if (session('ministryPassword'))
        {
            return view('Ministry.contact');
        }
        else{
            return view('Ministry.login');}
    }
    else{
        return view('Ministry.login');}
});

Route::get('/ministrycostestimate', function () {


    if (session('ministryEmail'))
    {
        if (session('ministryPassword'))
        {
            return view('Ministry.costestimate');
        }
        else{
            return view('Ministry.login');}
    }
    else{
        return view('Ministry.login');}
});

Route::get('/ministryFeedback', function () {

    if (session('ministryEmail'))
    {
        if (session('ministryPassword'))
        {
            return view('Ministry.feedback');
        }
        else{
            return view('Ministry.login');}
    }
    else{
        return view('Ministry.login');}

});

Route::get('/ministryprofile', function () {

    if (session('ministryEmail'))
    {
        if (session('ministryPassword'))
        {
            return view('Ministry.profile');
        }
        else{
            return view('Ministry.login');}
    }
    else{
        return view('Ministry.login');}

});

//end ministry
