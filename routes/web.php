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

Route::get('review','UserController@review');
Route::get('review2','UserController@review2');
Route::get('feature','UserController@feature');
Route::get('newassignment','UserController@new_assignment');
Route::post('/feedback','UserController@feedback');
Route::post('/submitnew','UserController@submitnew');
Route::get('onlineassignmenthelp','UserController@onlineassignmenthelp');
Route::get('dissertationwrittinghelp','UserController@dissertationwrittinghelp');
Route::get('a2zassignment','UserController@a2zassignment');


Route::get('/', 'WelcomeController@Welcome');
Route::get('Fair_use_of_policy/', 'WelcomeController@Fair_use_of_policy');
Route::get('Get_to_know_us/', 'WelcomeController@Get_to_know_us');
Route::get('Legit_essays/', 'WelcomeController@Legit_essays');
Route::get('Premium/', 'WelcomeController@Premium');
Route::get('Privacy_policy/', 'WelcomeController@Privacy_policy');
Route::get('Term_of_use/', 'WelcomeController@Term_of_use');
Route::get('Revision_and_refund/', 'WelcomeController@Revision_and_refund');
Route::get('Resume_builder/', 'WelcomeController@Resume_builder');
Route::get('/UserDashboard', 'UserController@UserView');
Route::get('/CompletedAssignment', 'UserController@Completed');
Route::get('/ExpiredAssignment', 'UserController@Expired');
Route::get('/RewokAssignment', 'UserController@Rework');
Route::get('/Services', 'ServiceController@ServiceView');
Route::get('/Faq', 'FAQ@Faq');
Route::get('academic', 'ServiceController@academic_writing_services');
Route::get('management', 'ServiceController@management_writing_services');
Route::get('finance', 'ServiceController@finance_assignment_help');
Route::get('nursing', 'ServiceController@nursing_assignment_help');
Route::get('economics', 'ServiceController@economics_assignment_help');
Route::get('statistics', 'ServiceController@statistics_assignment_help');
Route::get('engineering', 'ServiceController@engineering_assignment_help');
Route::get('law', 'ServiceController@law');
Route::get('humanities', 'ServiceController@humanities_assignment_help');
Route::get('business', 'ServiceController@business_report_help');
Route::get('assignment', 'ServiceController@assignment_writing');
Route::get('dissertation', 'ServiceController@dissertation_writing');
Route::get('essay', 'ServiceController@essay_writting');
Route::get('programming', 'ServiceController@programming_assignment');
Route::get('homework', 'ServiceController@homework_help');
Route::get('thesis', 'ServiceController@thesis_help');
Route::get('research', 'ServiceController@research_writing_service');
Route::get('cdr', 'ServiceController@cdr_help');
Route::get('proof', 'ServiceController@proof_reading_help');
Route::get('a2z', 'ServiceController@a2z_assignment_help');
Route::get('academic_assignment_help', 'ServiceController@academic_assignment_help');
Route::get('all_assignment_help', 'ServiceController@all_assignment_help');
Route::get('assignment_cover_page', 'ServiceController@assignment_cover_page');
Route::get('assignment_help_online', 'ServiceController@assignment_help_online');
Route::get('assignment_help_tutors', 'ServiceController@assignment_help_tutors');
Route::get('assignment_paper_help', 'ServiceController@assignment_paper_help');
Route::get('assignment_provider', 'ServiceController@assignment_provider');
Route::get('assignment_assistance', 'ServiceController@assignment_assistance');
Route::get('assignment_writing_tips', 'ServiceController@assignment_writing_tips');
Route::get('buy_assignments_online', 'ServiceController@buy_assignments_online');
Route::get('cheap_assignment_help', 'ServiceController@cheap_assignment_help');
Route::get('college_assignment_help', 'ServiceController@college_assignment_help');

Route::get('do_assignment_for_me', 'ServiceController@do_assignment_for_me');
Route::get('do_my_assignment', 'ServiceController@do_my_assignment');
Route::get('get_assignment_help', 'ServiceController@college_assignment_help');
Route::get('HND_assignment_help', 'ServiceController@HND_assignment_help');
Route::get('make_my_assignment', 'ServiceController@make_my_assignment');
Route::get('narrative_writing_help', 'ServiceController@narrative_writing_help');

Route::get('pay_for_assignment_help', 'ServiceController@pay_for_assignment_help');
Route::get('perdisco_assignment_help', 'ServiceController@perdisco_assignment_help');
Route::get('personal_statement_writing', 'ServiceController@personal_statement_writing');
Route::get('powerpoint_presentation_service', 'ServiceController@powerpoint_presentation_service');
Route::get('solve_my_assignment', 'ServiceController@solve_my_assignment');
Route::get('spss_assignment_help', 'ServiceController@spss_assignment_help');
Route::get('student_assignment_help', 'ServiceController@student_assignment_help');
Route::get('study_help_online', 'ServiceController@study_help_online');
Route::get('TAFE_assignment_help', 'ServiceController@TAFE_assignment_help');

Route::get('total_assignment_help', 'ServiceController@total_assignment_help');
Route::get('university_assignment_help', 'ServiceController@university_assignment_help');
Route::get('urgent_assignment_help', 'ServiceController@urgent_assignment_help');
Route::get('world_no_1_assignment_help', 'ServiceController@world_no_1_assignment_help');
Route::get('write_my_assignment', 'ServiceController@write_my_assignment');

Route::get('ANTHROPOLOGY_ASSIGNMENT_HELP', 'ServiceController@ANTHROPOLOGY_ASSIGNMENT_HELP');
Route::get('BIOCHEMISTRY_ASSIGNMENT_HELP', 'ServiceController@BIOCHEMISTRY_ASSIGNMENT_HELP');
Route::get('BIOINFORMATICS_ASSIGNMENT_HELP', 'ServiceController@BIOINFORMATICS_ASSIGNMENT_HELP');
Route::get('BIOLOGY_ASSIGNMENT_HELP', 'ServiceController@BIOLOGY_ASSIGNMENT_HELP');
Route::get('BIOTECHNOLOGY_ASSIGNMENT_HELP', 'ServiceController@BIOTECHNOLOGY_ASSIGNMENT_HELP');
Route::get('PALEONTOLOGY_ASSIGNMENT_HELP', 'ServiceController@PALEONTOLOGY_ASSIGNMENT_HELP');

Route::get('Business_Report_Writing', 'ServiceController@Business_Report_Writing');
Route::get('Report_Writing', 'ServiceController@Report_Writing');

Route::get('four_Step_Process_Law_Case_Study', 'ServiceController@four_Step_Process_Law_Case_Study');
Route::get('Amway_Case_Study_Swot_Analysis', 'ServiceController@Amway_Case_Study_Swot_Analysis');
Route::get('Apple_Swot_and_Pestle_Analysis', 'ServiceController@Apple_Swot_and_Pestle_Analysis');
Route::get('Buy_Assignment_Case_Study', 'ServiceController@Buy_Assignment_Case_Study');
Route::get('Case_Study_Assignment_Help', 'ServiceController@Case_Study_Assignment_Help');
Route::get('Case_Study_Assignment_Sample', 'ServiceController@Case_Study_Assignment_Sample');
Route::get('Case_Study_on_Samsung', 'ServiceController@Case_Study_on_Samsung');
Route::get('Case_Study_Help', 'ServiceController@Case_Study_Help');
Route::get('Case_Study_on_Vodafone', 'ServiceController@Case_Study_on_Vodafone');
Route::get('Case_Study_Writing_Services', 'ServiceController@Case_Study_Writing_Services');
Route::get('Coca_Cola_Swot_Analysis_Case_Study', 'ServiceController@Coca_Cola_Swot_Analysis_Case_Study');
Route::get('Company_Law_Case_Study', 'ServiceController@Company_Law_Case_Study');
Route::get('Contract_Law_Case_Studies_Sample', 'ServiceController@Contract_Law_Case_Studies_Sample');
Route::get('History_Case_Study', 'ServiceController@History_Case_Study');
Route::get('Ikea_Case_Study', 'ServiceController@Ikea_Case_Study');
Route::get('Mcdonalds_Pestle_Analysis_Case_Study', 'ServiceController@Mcdonalds_Pestle_Analysis_Case_Study');
Route::get('Nike_Swot_Pest_Analysis_Case_Study', 'ServiceController@Nike_Swot_Pest_Analysis_Case_Study');
Route::get('Write_My_Case_Study_For_Me', 'ServiceController@Write_My_Case_Study_For_Me');
Route::get('Zara_Case_Study_Swot_Analysis_Solution', 'ServiceController@Zara_Case_Study_Swot_Analysis_Solution');

Route::get('CDR_Engineers_Australia', 'ServiceController@CDR_Engineers_Australia');
Route::get('CDR_Report_Writers', 'ServiceController@CDR_Report_Writers');
Route::get('CDR_Writing_Services', 'ServiceController@CDR_Writing_Services');

Route::get('Accounting_Assignment_Help', 'ServiceController@Accounting_Assignment_Help');
Route::get('Activity_Based_Accounting_Assignment_Help', 'ServiceController@Activity_Based_Accounting_Assignment_Help');
Route::get('Business_Accounting_Assignment_Help', 'ServiceController@Business_Accounting_Assignment_Help');
Route::get('Cost_Accounting_Assignment_Help', 'ServiceController@Cost_Accounting_Assignment_Help');
Route::get('Economics_Assignment__Help', 'ServiceController@Economics_Assignment__Help');
Route::get('Financial_Accounting_Assignment_Help', 'ServiceController@Financial_Accounting_Assignment_Help');
Route::get('Managerial_Accounting_Assignment_Help', 'ServiceController@Managerial_Accounting_Assignment_Help');
Route::get('Solve_My_Accounting_Paper', 'ServiceController@Solve_My_Accounting_Paper');
Route::get('Taxation_Assignment__Help', 'ServiceController@Taxation_Assignment__Help');

Route::get('Business_Intelligence_Assignment_Help', 'ServiceController@Business_Intelligence_Assignment_Help');
Route::get('Computer_Network_Assignment_Help', 'ServiceController@Computer_Network_Assignment_Help');
Route::get('Data_Flow_Diagram_Assignment_Help', 'ServiceController@Data_Flow_Diagram_Assignment_Help');
Route::get('Data_Mining_Assignment_Help', 'ServiceController@Data_Mining_Assignment_Help');
Route::get('Data_Structure_Assignment_Help', 'ServiceController@Data_Structure_Assignment_Help');
Route::get('Financial_Accounting_Assignment_Help', 'ServiceController@Financial_Accounting_Assignment_Help');
Route::get('Database_Assignment_Help', 'ServiceController@Database_Assignment_Help');
Route::get('Information_Technology_Assignment_Help', 'ServiceController@Information_Technology_Assignment_Help');
Route::get('IT_Management_Assignment_Help', 'ServiceController@IT_Management_Assignment_Help');
Route::get('Operating_System_Assignment_Help', 'ServiceController@Operating_System_Assignment_Help');
Route::get('UML_Diagram_Assignment_Help', 'ServiceController@UML_Diagram_Assignment_Help');

Route::get('Business_Law_Assignment_Help', 'ServiceController@Business_Law_Assignment_Help');
Route::get('Commercial_Law_Assignment_Help', 'ServiceController@Commercial_Law_Assignment_Help');
Route::get('Company_Law_Assignment_Help', 'ServiceController@Company_Law_Assignment_Help');
Route::get('Constitutional_Law_Assignment_Help', 'ServiceController@Constitutional_Law_Assignment_Help');
Route::get('Consumer_Law_Assignment_Help', 'ServiceController@Consumer_Law_Assignment_Help');
Route::get('Contract_Law_Assignmen_tHelp', 'ServiceController@Contract_Law_Assignmen_tHelp');
Route::get('Corp_Governance_Law_Assignment_Help', 'ServiceController@Corp_Governance_Law_Assignment_Help');
Route::get('Criminal_Law_Assignment_Help', 'ServiceController@Criminal_Law_Assignment_Help');
Route::get('Criminology_Assignment_Help', 'ServiceController@Criminology_Assignment_Help');
Route::get('Employment_Law_Assignment_Help', 'ServiceController@Employment_Law_Assignment_Help');
Route::get('Environmental_Law_Assignment_Help', 'ServiceController@Environmental_Law_Assignment_Help');
Route::get('Law_Assignment__Help', 'ServiceController@Law_Assignment__Help');
Route::get('Law_Assignment_Sample', 'ServiceController@Law_Assignment_Sample');
Route::get('Taxation_Assignment_Help', 'ServiceController@Taxation_Assignment_Help');
Route::get('Taxation_Law_Assignment_Help', 'ServiceController@Taxation_Law_Assignment_Help');

Route::get('Economics_Assignment_Help', 'ServiceController@Economics_Assignment_Help');
Route::get('Managerial_Economics_Assignment_Help', 'ServiceController@Managerial_Economics_Assignment_Help');
Route::get('Microeconomics_Assignment_Help', 'ServiceController@Microeconomics_Assignment_Help');

Route::get('Civil_Engineering_Assignment_Help', 'ServiceController@Civil_Engineering_Assignment_Help');
Route::get('Electrical_Engineering_Assignment_Help', 'ServiceController@Electrical_Engineering_Assignment_Help');
Route::get('Engineering_Assignment__Help', 'ServiceController@Engineering_Assignment_Help');
Route::get('Fluid_Mechanics_Assignment_Help', 'ServiceController@Fluid_Mechanics_Assignment_Help');
Route::get('Mechanical_Assignment_Help', 'ServiceController@Mechanical_Assignment_Help');


Route::get('Admission_Essay_Help', 'ServiceController@Admission_Essay_Help');
Route::get('Assignment_Writer_Perth', 'ServiceController@Assignment_Writer_Perth');
Route::get('Assignment_Writer_Sydney', 'ServiceController@Assignment_Writer_Sydney');
Route::get('Assignment_Writing_Brisbane', 'ServiceController@Assignment_Writing_Brisbane');
Route::get('Best_Essay_Writing_Service', 'ServiceController@Best_Essay_Writing_Service');
Route::get('Business_Essay_Help', 'ServiceController@Business_Essay_Help');
Route::get('Cheap_Essay_Writer', 'ServiceController@Cheap_Essay_Writer');
Route::get('Cheap_Essay_Writing_Services', 'ServiceController@Cheap_Essay_Writing_Services');
Route::get('College_Application_Essay', 'ServiceController@College_Application_Essay');
Route::get('College_Essay_Writing_Service', 'ServiceController@College_Essay_Writing_Service');
Route::get('Custom_Essay_Help', 'ServiceController@Custom_Essay_Help');
Route::get('Descriptive_Essay_Help', 'ServiceController@Descriptive_Essay_Help');
Route::get('Do_My_Essay_Online', 'ServiceController@Do_My_Essay_Online');
Route::get('English_Essay_Writing', 'ServiceController@English_Essay_Writing');
Route::get('Essay_Assignment_Help', 'ServiceController@Essay_Assignment_Help');
Route::get('Essay_Conclusion', 'ServiceController@Essay_Conclusion');
Route::get('Essay_Help_Online', 'ServiceController@Essay_Help_Online');
Route::get('Essay_Homework_Help', 'ServiceController@Essay_Homework_Help');
Route::get('Essay_Outline_Help', 'ServiceController@Essay_Outline_Help');
Route::get('Essay_Topics', 'ServiceController@Essay_Topics');
Route::get('Essay_Types', 'ServiceController@Essay_Types');
Route::get('Essay_Writer_for_Australia', 'ServiceController@Electrical_Engineering_Assignment_Help');
Route::get('Essay_Writers_Online', 'ServiceController@Essay_Writers_Online');
Route::get('Essay_Writing_Help', 'ServiceController@Essay_Writing_Help');
Route::get('Evaluative_Essay_Help', 'ServiceController@Evaluative_Essay_Help');
Route::get('Fast_Essay_Writing_Service', 'ServiceController@Fast_Essay_Writing_Service');
Route::get('History_Essay_Help', 'ServiceController@Electrical_Engineering_Assignment_Help');
Route::get('Illustration_Essay_Help', 'ServiceController@Illustration_Essay_Help');
Route::get('Law_Assignment_Help', 'ServiceController@Law_Assignment_Help');
Route::get('MBA_Essay_Help', 'ServiceController@MBA_Essay_Help');
Route::get('Need_Help_Writing_Essay', 'ServiceController@Need_Help_Writing_Essay');
Route::get('Online_Custom_Essay_Help', 'ServiceController@Online_Custom_Essay_Help');
Route::get('Plagiarism_Free_Essays', 'ServiceController@Plagiarism_Free_Essays');
Route::get('Professional_Essay_Writer', 'ServiceController@Professional_Essay_Writer');
Route::get('Research_Essay_Help', 'ServiceController@Research_Essay_Help');
Route::get('Response_Essay_Help', 'ServiceController@Response_Essay_Help');
Route::get('Scholarship_Essay_Help', 'ServiceController@Scholarship_Essay_Help');
Route::get('Scholarship_Essay_Sample', 'ServiceController@Scholarship_Essay_Sample');
Route::get('Top_Essay_Writing_Companies', 'ServiceController@Top_Essay_Writing_Companies');
Route::get('Urgent_Essay_Help', 'ServiceController@Urgent_Essay_Help');
Route::get('Write_an_Essay_Online', 'ServiceController@Write_an_Essay_Online');
Route::get('Write_My_Essay', 'ServiceController@Write_My_Essay');
Route::get('Writing_Essay_Papers', 'ServiceController@Writing_Essay_Papers');
Route::get('Literature_Essay_Help', 'ServiceController@Literature_Essay_Help');
Route::get('Nursing_Assignment_help', 'ServiceController@Nursing_Assignment_help');
Route::get('Philosophy_Essay_Help', 'ServiceController@Philosophy_Essay_Help');
Route::get('Essay_Structure', 'ServiceController@Essay_Structure');
Route::get('Essay_Rewriter', 'ServiceController@Essay_Rewriter');


Route::get('Behavioral_Finance_Assignment_Help', 'ServiceController@Behavioral_Finance_Assignment_Help');
Route::get('Capital_Budgeting_Assignment_Help', 'ServiceController@Capital_Budgeting_Assignment_Help');
Route::get('Corporate_Finance_Planning_Assignment_Help', 'ServiceController@Corporate_Finance_Planning_Assignment_Help');
Route::get('Finance_Assignment__Help', 'ServiceController@Finance_Assignment__Help');
Route::get('Finance_Planning_Assignment_Help', 'ServiceController@Finance_Planning_Assignment_Help');
Route::get('Financial_Accounting_Assignment__Help', 'ServiceController@Financial_Accounting_Assignment__Help');
Route::get('Financial_Services_Assignment_Help', 'ServiceController@Financial_Services_Assignment_Help');
Route::get('Financial_Statement_Analysis_Assignment_Help', 'ServiceController@Financial_Statement_Analysis_Assignment_Help');
Route::get('Forex_Assignment_Help', 'ServiceController@Forex_Assignment_Help');
Route::get('Personal_Finance_Assignment_Help', 'ServiceController@Personal_Finance_Assignment_Help');


Route::get('Algebra_Homework_Help', 'ServiceController@Algebra_Homework_Help');
Route::get('Buy_Homework_Online', 'ServiceController@Buy_Homework_Online');
Route::get('Cheap_Homework_Help', 'ServiceController@Cheap_Homework_Help');
Route::get('Do_My_Homework', 'ServiceController@Do_My_Homework');
Route::get('Do_My_Math_Homework', 'ServiceController@Do_My_Math_Homework');
Route::get('Economics_Homework_Help', 'ServiceController@Economics_Homework_Help');
Route::get('English_Homework_Help', 'ServiceController@English_Homework_Help');
Route::get('Essay_Homework_Help', 'ServiceController@Essay_Homework_Help');
Route::get('History_Homework_Help', 'ServiceController@History_Homework_Help');
Route::get('Homework_Help_Online', 'ServiceController@Homework_Help_Online');
Route::get('Homework_Help_Services', 'ServiceController@Homework_Help_Services');
Route::get('Homework_Help', 'ServiceController@Homework_Help');
Route::get('Homework_Writer', 'ServiceController@Homework_Writer');
Route::get('Homework_Writing_Service', 'ServiceController@Homework_Writing_Service');
Route::get('Math_Homework_Help', 'ServiceController@Math_Homework_Help');
Route::get('Pay_Someone_to_do_my_Homework', 'ServiceController@Pay_Someone_to_do_my_Homework');
Route::get('PHP_Homework_Help', 'ServiceController@PHP_Homework_Help');
Route::get('Statistics_Homework_Help', 'ServiceController@Statistics_Homework_Help');
Route::get('Write_My_Homework_for_me', 'ServiceController@Write_My_Homework_for_me');



Route::get('Agroecology_Assignment_Help', 'ServiceController@Agroecology_Assignment_Help');
Route::get('English_Assignment_Help', 'ServiceController@English_Assignment_Help');
Route::get('Geography_Assignment_Help', 'ServiceController@Geography_Assignment_Help');
Route::get('History_Assignment_Help', 'ServiceController@History_Assignment_Help');
Route::get('Humanities_Assignment_Help', 'ServiceController@Humanities_Assignment_Help');
Route::get('Mass_Communication_Assignment_Help', 'ServiceController@Mass_Communication_Assignment_Help');
Route::get('Philosophy_Assignment_Help', 'ServiceController@Philosophy_Assignment_Help');
Route::get('Political_Science_Assignment_Help', 'ServiceController@Political_Science_Assignment_Help');
Route::get('Psychology_Assignment_Help', 'ServiceController@Psychology_Assignment_Help');
Route::get('Public_Relations_Assignment_Help', 'ServiceController@Public_Relations_Assignment_Help');
Route::get('Social_Science_Assignment_Help', 'ServiceController@Social_Science_Assignment_Help');
Route::get('Sociology_Assignment_Help', 'ServiceController@Sociology_Assignment_Help');

Route::get('Academic_Dissertation_Help', 'ServiceController@Academic_Dissertation_Help');
Route::get('Architecture_Dissertation_Help', 'ServiceController@Architecture_Dissertation_Help');
Route::get('Biology_Dissertation_Help', 'ServiceController@Biology_Dissertation_Help');
Route::get('Cheap_Dissertation_Help', 'ServiceController@Cheap_Dissertation_Help');
Route::get('Dissertation_Help_Online', 'ServiceController@Dissertation_Help_Online');
Route::get('Dissertation_Proofreading_Services', 'ServiceController@Dissertation_Proofreading_Services');
Route::get('Doctoral_Dissertation_Help', 'ServiceController@Doctoral_Dissertation_Help');
Route::get('Dissertation_Statistics_Help', 'ServiceController@Dissertation_Statistics_Help');
Route::get('Dissertation_Writing_Help', 'ServiceController@Dissertation_Writing_Help');
Route::get('English_Dissertation_Help', 'ServiceController@English_Dissertation_Help');
Route::get('Geography_Dissertation_Help', 'ServiceController@Geography_Dissertation_Help');
Route::get('Law_Dissertation_Help', 'ServiceController@Law_Dissertation_Help');
Route::get('Marketing_Dissertation_Help', 'ServiceController@Marketing_Dissertation_Help');
Route::get('MATLAB_Dissertation_Help', 'ServiceController@MATLAB_Dissertation_Help');
Route::get('Nursing_Dissertation_Help', 'ServiceController@Nursing_Dissertation_Help');
Route::get('Sociology_Dissertation_Help', 'ServiceController@Sociology_Dissertation_Help');


Route::get('p_of_Marketing_Assignment_Help', 'ServiceController@p_of_Marketing_Assignment_Help');
Route::get('Business_Assignment_Help', 'ServiceController@Business_Assignment_Help');
Route::get('Business_Development_Assignment_Help', 'ServiceController@Business_Development_Assignment_Help');
Route::get('Business_Ethics_Assignment_Help', 'ServiceController@Business_Ethics_Assignment_Help');
Route::get('Business_Statistics_Assignment_Help', 'ServiceController@Business_Statistics_Assignment_Help');
Route::get('Change_Management_Assignment_Help', 'ServiceController@Change_Management_Assignment_Help');
Route::get('Conflict_Management_Assignment_Help', 'ServiceController@Conflict_Management_Assignment_Help');
Route::get('Corporate_Strategy_Assignment_Help', 'ServiceController@Corporate_Strategy_Assignment_Help');
Route::get('CRM_Assignment_Help', 'ServiceController@CRM_Assignment_Help');
Route::get('Human_Resource_Assignment_Help', 'ServiceController@Human_Resource_Assignment_Help');
Route::get('Management_Assignment_Help', 'ServiceController@Management_Assignment_Help');
Route::get('Managerial_Economics_Assignment_Help', 'ServiceController@Managerial_Economics_Assignment_Help');
Route::get('Market_Analysis_Assignment_Help', 'ServiceController@Market_Analysis_Assignment_Help');
Route::get('Marketing_Assignment_Help', 'ServiceController@Marketing_Assignment_Help');
Route::get('Marketing_Management_Assignment_Help', 'ServiceController@Marketing_Management_Assignment_Help');
Route::get('Marketing_Research_Assignment_Help', 'ServiceController@Marketing_Research_Assignment_Help');
Route::get('MBA_Assignment_Help', 'ServiceController@MBA_Assignment_Help');
Route::get('Operation_Assignment_Help', 'ServiceController@Operation_Assignment_Help');
Route::get('Operations_Management_Assignment_Help', 'ServiceController@Operations_Management_Assignment_Help');
Route::get('Pricing_Strategy_Assignment_Help', 'ServiceController@Pricing_Strategy_Assignment_Help');
Route::get('Project_Management_Assignment_Help', 'ServiceController@Project_Management_Assignment_Help');
Route::get('Project_Risk_Management_Assignment_Help', 'ServiceController@Project_Risk_Management_Assignment_Help');
Route::get('Statistics_Assignment_Help', 'ServiceController@Statistics_Assignment_Help');
Route::get('Strategic_Management_Assignment_Help', 'ServiceController@Strategic_Management_Assignment_Help');
Route::get('Strategic_Marketing_Assignment_Help', 'ServiceController@Strategic_Marketing_Assignment_Help');
Route::get('Strategy_Assignment_Help', 'ServiceController@Strategy_Assignment_Help');
Route::get('Supply_Chain_Management_Assignment_Help', 'ServiceController@Supply_Chain_Management_Assignment_Help');

Route::get('Clinical_Reasoning_Cycle', 'ServiceController@Clinical_Reasoning_Cycle');
Route::get('Nursing_Assignment_Help', 'ServiceController@Nursing_Assignment_Help');
Route::get('Nursing_Help', 'ServiceController@Nursing_Help');
Route::get('Pharmacology_Assignment_Help', 'ServiceController@Pharmacology_Assignment_Help');


Route::get('C_Assignment_Help', 'ServiceController@C_Assignment_Help');
Route::get('Data_Flow_Diagram_Assignment_Help', 'ServiceController@Data_Flow_Diagram_Assignment_Help');
Route::get('Data_Mining_Assignment_Help', 'ServiceController@Data_Mining_Assignment_Help');
Route::get('Data_Structure_Assignment_Help', 'ServiceController@Data_Structure_Assignment_Help');
Route::get('Database_Management_Assignment_Help', 'ServiceController@Database_Management_Assignment_Help');
Route::get('Matlab_Assignment_Help', 'ServiceController@Matlab_Assignment_Help');
Route::get('MYOB_Assignment_Help', 'ServiceController@MYOB_Assignment_Help');
Route::get('Perl_Assignment_Help', 'ServiceController@Perl_Assignment_Help');
Route::get('Programming_Assignment_Experts', 'ServiceController@Programming_Assignment_Experts');
Route::get('Programming_Language_Assignment_Help', 'ServiceController@Programming_Language_Assignment_Help');
Route::get('SAS_Assignment_Help', 'ServiceController@SAS_Assignment_Help');
Route::get('UML_Assignment_Help', 'ServiceController@UML_Assignment_Help');
Route::get('Web_Designing_Assignment_Help', 'ServiceController@Web_Designing_Assignment_Help');

Route::get('Proof_Reading_Services_Australia', 'ServiceController@Proof_Reading_Services_Australia');
Route::get('Proof_Reading_Services_UK', 'ServiceController@Proof_Reading_Services_UK');
Route::get('Proof_Reading_Services', 'ServiceController@Proof_Reading_Services');

Route::get('Bibliography_Maker', 'ServiceController@Bibliography_Maker');
Route::get('Buy_College_Papers', 'ServiceController@Buy_College_Papers');
Route::get('College_Paper_Writing', 'ServiceController@College_Paper_Writing');
Route::get('Custom_Pape_Writing_Services', 'ServiceController@Custom_Pape_Writing_Services');
Route::get('Ghost_Writers', 'ServiceController@Ghost_Writers');
Route::get('Help_with_Report', 'ServiceController@Help_with_Report');
Route::get('How_to_Write_a_College_Paper', 'ServiceController@How_to_Write_a_College_Paper');
Route::get('Paper_Writers', 'ServiceController@Paper_Writers');
Route::get('Research_Paper_Help', 'ServiceController@Research_Paper_Help');
Route::get('Research_Paper_Topics', 'ServiceController@Research_Paper_Topics');
Route::get('Research_Paper_Writing_Service', 'ServiceController@Research_Paper_Writing_Service');
Route::get('Research_Proposal_Help', 'ServiceController@Research_Proposal_Help');
Route::get('Research_Writing_Help', 'ServiceController@Research_Writing_Help');
Route::get('Story_Writing', 'ServiceController@Story_Writing');
Route::get('Term_Paper', 'ServiceController@Term_Paper');
Route::get('Writing_Services', 'ServiceController@Writing_Services');
Route::get('Custom_Writing_Service', 'ServiceController@Custom_Writing_Service');

Route::get('statistics_assignment_help', 'ServiceController@statistics_assignment_help');

Route::get('How_to_Write_a_Thesis', 'ServiceController@How_to_Write_a_Thesis');
Route::get('Thesis_Help_Online', 'ServiceController@Thesis_Help_Online');
Route::get('Thesis_Paper', 'ServiceController@Thesis_Paper');
Route::get('Thesis_Topics', 'ServiceController@Thesis_Topics');
Route::get('Write_My_Thesis_for_me', 'ServiceController@Write_My_Thesis_for_me');
Route::get('thesis_help', 'ServiceController@thesis_help');
Route::get('My_Assignment_Help', 'ServiceController@My_Assignment_Help');
