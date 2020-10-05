<?php

use Illuminate\Support\Facades\Route;

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
//Route::view('/sms','sms');

//Route::view('/test','test');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ReceptionDashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/NurseDashboard', 'HomeController@nurse')->name('NurseDashboard');
Route::get('/DoctorDashboard', 'HomeController@doctor')->name('DoctorDashboard');
//Route::get('/testhome', 'HomeController@test')->name('testhome');
              // User Routs
Route::view('/user','user');
Route::post('/user', 'usercontroller@user')->name('user');
Route::get('/user', 'usercontroller@show');
Route::get('/userdelete/{id}', 'usercontroller@delete');
Route::get('/userupdate/{id}', 'usercontroller@update');
Route::post('/edit', 'usercontroller@edit');
Route::get('/userprofile/{id}','usercontroller@profile');
Route::view('/group','user.group');
Route::post('/group','usercontroller@add')->name('group');
Route::get('/group','usercontroller@groupShow');
Route::get('/groupdelete/{id}','usercontroller@groupdelete');
Route::get('/groupupdate/{id}','usercontroller@groupupdate');
Route::post('/groupEdit','usercontroller@groupedit');

            //Department Routs
Route::view('/department','department');
Route::post('/department', 'departmentController@department')->name('department');
Route::get('/department', 'departmentController@show');
Route::get('/delete/{id}', 'departmentController@delete');
Route::get('/update/{id}', 'departmentController@update');
Route::post('/edite', 'departmentController@edit');



            // Procedure Routs
Route::view('/procedure','procedure');
Route::post('/procedure', 'procedureController@procedure')->name('procedure');
Route::get('/procedure', 'procedureController@show');
Route::get('/remove/{id}','procedureController@delete');
Route::get('/updation/{id}', 'procedureController@update');
Route::post('/procedureUpdate', 'procedureController@edit');



            //Supplier Routs
Route::view('/supplier','supplier');
Route::post('/supplier', 'supplierController@supplier')->name('supplier');
Route::get('/supplier','supplierController@show');
Route::get('/removed/{id}','supplierController@delete');
Route::get('/updated/{id}', 'supplierController@update');
Route::post('/supplierUpdate', 'supplierController@edit');


Route::view('/referee','referee');
Route::post('/referee', 'refereeController@referee')->name('referee');
Route::get('/referee','refereeController@show');
Route::get('/deleted/{id}','refereeController@delete');
Route::get('/updat/{id}', 'refereeController@update');
Route::post('/refUpdate','refereeController@edit');

Route::view('/Hospital','referee.Hospital');
Route::post('/Hospital','refereeController@Hospital')->name('Hospital');
Route::get('/Hospital','refereeController@hospitalShow');
Route::get('/hospitaldelete/{id}','refereeController@hospitaldelete');
Route::get('/hospitalupdate/{id}','refereeController@hospitalupdate');
Route::post('/hospitalEdit','refereeController@hospitaledit');

Route::view('/tag','Patient.tag');
Route::post('/tag','TagController@tag')->name('tag');
Route::get('/tag','TagController@tagShow');
Route::get('/tagdelete/{id}','TagController@tagdelete');
Route::get('/tagupdate/{id}','TagController@tagupdate');
Route::post('/tagEdit','TagController@tagedit');



Route::view('/doctor','doctor');
Route::post('/doctor','doctorController@doctor')->name('doctor');
Route::get('/doctor','doctorController@show');
Route::get('/delet/{id}','doctorController@delete');
Route::get('/docUpdate/{id}', 'doctorController@update');
Route::post('/doctorUpdate','doctorController@edit');

Route::view('/status','Doctor.Status');
Route::post('/status','doctorController@status')->name('status');
Route::get('/status','doctorController@statusShow');
Route::get('/statusdelete/{id}','doctorController@statusdelete');
Route::get('/statusupdate/{id}','doctorController@statusupdate');
Route::post('/statusEdit','doctorController@statusedit');



Route::view('/itemType','itemType');
Route::post('/itemType','itemController@itemType')->name('itemType');
Route::get('/itemType','itemController@show');
Route::get('/delette/{id}','itemController@delete');
Route::get('/itUpdate/{id}', 'itemController@update');
Route::post('/ItemUpdate','itemController@edit');


Route::view('/pharmacyItem','pharmacyItem');
Route::post('/pharmacyItem','pharmacyController@pharmacy')->name('pharmacyItem');
Route::get('/pharmacyItem','pharmacyController@show');
Route::get('/deletted/{id}','pharmacyController@delete');
Route::get('/pharUpdate/{id}', 'pharmacyController@update');
Route::post('/PharmacyUpdate','pharmacyController@edit');


Route::view('/DoctorStatus','DoctorStatus');
Route::post('/DoctorStatus','DoctorStatusController@DocStatus')->name('doctorstatus');
Route::get('/DoctorStatus','DoctorStatusController@show');
Route::get('/delettedd/{id}','DoctorStatusController@delete');
Route::get('/DocUpdate/{id}', 'DoctorStatusController@update');
Route::post('/DoctorStatusUpdate','DoctorStatusController@edit');


Route::view('/equipment','equipment');
Route::post('/equipment','equipmentController@equipment')->name('equipment');
Route::get('/equipment','equipmentController@show');
Route::get('/equipdelete/{id}','equipmentController@delete');
Route::get('/equipupdate/{id}', 'equipmentController@update');
Route::post('/updateEquipment','equipmentController@edit');

Route::view('/EquipAttachment','EquipAttachment');
Route::post('/EquipAttachment','equipmentController@Attachment')->name('EquipAttachment');
Route::get('/EquipAttachment','equipmentController@display');
Route::get('/Attachmentdelete/{id}','equipmentController@remove');
Route::get('/Attachmentupdate/{id}', 'equipmentController@Attachupdate');
Route::post('/AttachmentEdit','equipmentController@Attachedit');





Route::view('/DoctorNotes','DoctorNotes');
Route::post('/DoctorNotes','DoctorNoteController@DoctorNote')->name('DoctorNotes');
Route::get('/DoctorNotes','DoctorNoteController@show');
Route::get('/Notedelete/{id}','DoctorNoteController@delete');
Route::get('/NoteUpdate/{id}', 'DoctorNoteController@update');
Route::post('/UpdateDoctorNote','DoctorNoteController@edit');



Route::view('/MedsFrequency','MedsFrequency');
Route::post('/MedsFrequency','FrequencyController@frequency')->name('MedsFrequency');
Route::get('/MedsFrequency','FrequencyController@show');
Route::get('/Frequencydelete/{id}','FrequencyController@delete');
Route::get('/FrequencyUpdate/{id}', 'FrequencyController@update');
Route::post('/MedFreqUpdate','FrequencyController@edit');



Route::view('/MedsInstruction','MedsInstruction');
Route::post('/MedsInstruction','InstructionController@instruction')->name('MedsInstruction');
Route::get('/MedsInstruction','InstructionController@show');
Route::get('/instructiondelete/{id}','InstructionController@delete');
Route::get('/instructionUpdate/{id}', 'InstructionController@update');
Route::post('/MedInstructUpdate','InstructionController@edit');


Route::get('/patientLogin','patientLoginController@patientLogin');
Route::get('/patients','patientLoginController@patients');
Route::post('/patients','smsController@store');
Route::get('/patients','smsController@show');
Route::get('/patientdelete/{id}','smsController@delete');
Route::get('/patientupdate/{id}','smsController@update');
Route::post('/ListUpdate','smsController@edit');

Route::get('/AddUpdateEncounter/{id}','smsController@senddata');

Route::get('/UpdateEncounter/{id}','smsController@Encounter');


//Route::get('/patientEncounter/{id}','smsController@patientEncounter');
Route::post('/patientEncount','VisitController@store');
Route::get('/patientEncounter/{id}','VisitController@show');
Route::get('/patientEncounterDelete/{id}','VisitController@delete');
Route::get('/patientEncounterUpdate/{id}','VisitController@update');
Route::post('/patientEncountUpdate','VisitController@edit');   
Route::get('/findCost','procedureController@findCost');
Route::get('/patientInvoice/{id}','VisitController@send');

Route::get('/NoteEncounter/{id}','VisitController@NoteEncounter');

Route::get('/patientInvoice','patientLoginController@patientInvoice');
Route::get('/perscription','patientLoginController@perscription');

Route::get('/OrderEncounter/{id}','patientLoginController@OrderEncounter');
Route::get('/NurseOrder/{id}','patientLoginController@NurseOrder');
Route::get('/EncounterAttach/{id}','patientLoginController@EncounterAttach');
Route::post('/EncounterAttachment','AttachmentController@store');
//Route::get('/EncounterAttach','AttachmentController@show');
Route::get('/removedAttachment/{id}','AttachmentController@delete');
Route::get('/EncounterAttachmentUpdate/{id}', 'AttachmentController@update');
Route::post('/AttachmentEdit', 'AttachmentController@edit');


Route::get('/image/{id}','patientLoginController@image');
Route::post('/imagee','imageController@store');
//Route::get('/image','imageController@show');
Route::get('/removedimage/{id}','imageController@delete');
Route::get('/updateimage/{id}', 'imageController@update');
Route::post('/imageEdit', 'imageController@edit');


Route::get('/refferel/{id}','patientLoginController@refferel');
Route::get('/Sign/{id}','patientLoginController@Sign');
Route::get('/vital','patientLoginController@vital');
Route::get('/Encounter/{id}','patientLoginController@Encounter');
Route::get('/ProceduresAndSergeries/{id}','patientLoginController@ProceduresAndSergeries');
Route::post('/ProAndSergeries','sergeryController@store');
//Route::get('/ProceduresAndSergeries','sergeryController@show');
Route::get('/SerDelete/{id}','sergeryController@delete');
Route::get('/ProAndSerUpdate/{id}','sergeryController@update');
Route::post('/ProAndSergerUpdate','sergeryController@edit');

Route::get('/PastMedication/{id}','patientLoginController@PastMedication');
Route::post('/PastMedics','PastMedicationController@store');

Route::get('/PastDelete/{id}','PastMedicationController@delete');
Route::get('/Pastupdated/{id}','PastMedicationController@update');
Route::post('/PastMedicsUpdate','PastMedicationController@edit');

Route::get('/PastNotes/{id}','patientLoginController@PastNotes');

Route::post('/vitaaal','vitalController@store');
Route::get('/PastVites/{id}','patientLoginController@PastVites');
//Route::get('/PastVites','vitalController@show');

Route::get('/LabReports/{id}','patientLoginController@LabReports');
Route::post('/LabRep','LabReportController@store');
//Route::get('/LabReports','LabReportController@show');
Route::get('/ReportDelete/{id}','LabReportController@delete');
Route::get('/Reportupdate/{id}','LabReportController@update');
Route::post('/LabUpdate','LabReportController@edit');

Route::get('/Imaging/{id}','patientLoginController@Imaging');
Route::post('/imaging','imagingController@store');
Route::get('/Imaging','imagingController@show');
Route::get('/imagingDelete/{id}','imagingController@delete');
Route::get('/imagingupdate/{id}','imagingController@update');
Route::post('/imgUpdate','imagingController@edit');





Route::get('/appointment','FullCalendarController@index')->name('index');
Route::get('/load-events','EventController@loadEvents')->name('routeLoadEvents');
Route::put('/event-update','EventController@update')->name('routeEventUpdate');
Route::post('/event-store','EventController@store')->name('routeEventStore');
Route::delete('/event-delete','EventController@destroy')->name('routeEventDelete');

Route::get('/purchaseList','purchaseController@purchaseList');
Route::get('/newpurchaselist','purchaseController@newpurchaselist');
Route::get('/findPrice','purchaseController@findPrice');
Route::post('/newpurchase','ListController@newpurchase')->name('newpurchase');
Route::get('/purchaseList','ListController@show');
Route::get('/purchaseRemoved/{id}','ListController@destroy');
Route::get('/purchaseUpdate/{id}','ListController@update');
Route::post('/purchUpdate','ListController@Edit');

//Route::post('/list','listController@list')->name('list');
//Route::get('/purchaseList','purchaseListController@show');

/*
Route::get('/Frequencydelete/{id}','FrequencyController@delete');
Route::get('/FrequencyUpdate/{id}', 'FrequencyController@update');
Route::post('/MedFreqUpdate','FrequencyController@edit');
*/




Route::view('/fortest','fortest');
Route::view('/test','test');





