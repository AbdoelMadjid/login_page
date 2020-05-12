<?php
include_once("config/config.inc.php");
include_once("config/db.php");
header('Content-type: application/json');
header("access-control-allow-origin: *");

if($_SERVER['REQUEST_METHOD']!='POST'){
    $message["status"]='failure';
    $message["message"]='Request method not supported';
    echo json_encode($message);
    return; 
}

$data = json_decode(file_get_contents('php://input'), true);

function parseInput($param) {
    if(isset($_REQUEST[$param]) && $_REQUEST[$param]!=''){
        return $_REQUEST[$param];
    }else{
        return '';
    }
} 

$server = new Server($mysqli);
if(!$server->IsConnected()){
    $message["status"]='failure';
    $message["message"]='Unable to Communicate with Server';
    echo json_encode($message);
    return;   
}

$header = array(    
    "source"=>"Data Taken From",
    "PID"=>"PID",
    "email"=>"EMAIL",
    "subscription_type"=>"SUBSCRIPTION TYPE",
    "first_name"=>"FIRST NAME",
    "last_name"=>"LAST NAME",
    "gender"=>"GENDER",
    "dob"=>"DOB",
    "birth_place"=>"BIRTH PLACE",
    "birth_time"=>"BIRTH TIME",
    "manglik"=>"MANGLIK",
    "gotra"=>"GOTRA",
    "phone"=>"PHONE",
    "marital_status"=>"MARITAL STATUS",
    "height"=>"HEIGHT",
    "education"=>"EDUCATION",
    "school_name"=>"SCHOOL NAME",
    "ug"=>"UG",
    "pg"=>"PG",
    "ug_college"=>"UG COLLEGE",
    "pg_college"=>"PG COLLEGE",
    "college"=>"COLLEGE",
    "country_of_residence"=>"COUNTRY OF RESIDENCE",
    "state_of_residence"=>"STATE OF RESIDENCE",
    "city"=>"CITY",
    "mother_tongue"=>"MOTHER TONGUE",
    "family_based_out_of"=>"FAMILY BASED OUT OF",
    "religion"=>"RELIGION",
    "caste"=>"Caste",
    "sub_caste"=>"SUB CASTE",
    "complexion"=>"COMPLEXION",
    "employed_in"=>"EMPLOYED IN",
    "employed_as"=>"EMPLOYED AS",
    "employed_with"=>"EMPLOYED WITH",
    "annual_income"=>"ANNUAL INCOME",
    "family_income"=>"FAMILY INCOME",
    "family_type"=>"FAMILY TYPE",
    "about_family"=>"ABOUT FAMILY",
    "about"=>"about",
    "father_is"=>"FATHER IS",
    "mother_is"=>"MOTHER IS",
    "family_value"=>"FAMILY VALUE",
    "affluence_level"=>"AFFLUENCE LEVEL",
    "native_country"=>"NATIVE COUNTRY",
    "native_state"=>"NATIVE STATE",
    "unmarried_sisters"=>"UNMARRIED SISTERS",
    "married_sisters"=>"MARRIED SISTERS",
    "unmarried_brothers"=>"UNMARRIED BROTHERS",
    "has_children"=>"has children",
    "married_brothers"=>"MARRIED BROTHERS",
    "criminal_record"=>"CRIMINAL RECORD",
    "special_case"=>"SPECIAL CASE",
    "believes_in_horoscope"=>"BELIEVES IN HOROSCOPE",
    "food_habits"=>"FOOD HABITS",
    "drink"=>"DRINK",
    "smoke"=>"SMOKE",
    "pp_smoker"=>"PP SMOKER",
    "pp_drinker"=>"PP DRINKER",
    "pp_veg/non_veg"=>"PP VEG/NON VEG",
    "pp_fromage"=>"PP FROMAGE",
    "pp_toage"=>"PP TOAGE",
    "pp_caste"=>"PP CASTE",
    "pp_education_qualification"=>"PP EDUCATION QUALIFICATION",
    "pp_min_height"=>"PP MIN HEIGHT",
    "pp_max_height"=>"PP MAX HEIGHT",
    "pp_mother_tongue"=>"PP MOTHER TONGUE",
    "pp_religion"=>"PP RELIGION",
    "pp_manglik"=>"PP MANGLIK",
    "pp_income"=>"PP INCOME",
    "pp_employed_as"=>"PP EMPLOYED AS",
    "pp_body_type"=>"PP BODY TYPE",
    "pp_challenged"=>"PP CHALLENGED",
    "pp_marital_status"=>"PP MARITAL STATUS",
    "pp_country"=>"PP COUNTRY",
    "pp_state"=>"PP STATE",
    "pp_have_children"=>"PP HAVE CHILDREN",
    "pp_about_partner"=>"PP ABOUT PARTNER",
    "photo_url"=>"PHOTO URL","body_type"=>"BODY TYPE",
    "weight"=>"WEIGHT",
    "added_date"=>"ADDED DATE",
    "added_by"=>"ADDED BY",
    "house"=>"HOUSE",
    "address"=>"ADDRESS",
    "square_yards"=>"SQUARE YARDS",
    "hair_type"=>"HAIR TYPE",
    "looks"=>"LOOKS",
    "specs"=>"SPECS",
    "net_worth"=>"NET WORTH",
    "industry_type"=>"INDUSTRY TYPE",
    "company_name"=>"COMPANY NAME",
    "aadhar_verified"=>"AADHAR VERIFIED",
    "mobile_verified"=>"MOBILE VERIFIED",
    "emailid_verified"=>"EMAILID VERIFIED",
    "aadhar_proof"=>"AADHAR PROOF",
    "registration_fee"=>"REGISTRATION FEE",
    "meeting_fee"=>"MEETING FEE",
    "roka_charge"=>"ROKA CHARGE",
    "weekly_profile"=>"WEEKLY PROFILE",
    "duration"=>"DURATION",
    "package_type"=>"PACKAGE TYPE",
    "sold_by"=>"SOLD BY",
    "meeting_finalised_by"=>"MEETING FINALISED BY",
    "meeting_date"=>"MEETING DATE",
    "meeting_time"=>"MEETING TIME",
    "meeting_place"=>"MEETING PLACE",
    "meeting_lvm_id"=>"MEETING LVM ID",
    "client_type"=>"CLIENT TYPE",
    "residential_status"=>"Residential Status",
    "property_details"=>"Property Details",
    "vehicles"=>"Vehicles",
    "star"=>"Star",
    "rassi"=>"Rassi",
    "alternate_phone"=>"Alternate Phone",
    "whatsapp_number"=>"Whatsapp Number",
    "permanent_address"=>"Permanent Address",
    "instagram_id"=>"Instagram Id",
    "facebook_id"=>"Facebook Id",
    "linkedin_id"=>"Linkedin Id",
    "communication"=>"Communication",
    "pp_complexion"=>"PP Complexion",
    "pp_cant_get_married_to"=>"PP Cant Get Married To",
    "last_calling_date"=>"Last Calling Date",
    "calling_status"=>"Calling Status",
    "calling_comments"=>"Calling Comments",
    "profile_shortlisted_for"=>"Profile Shortlisted For",
    "response_shared_profile"=>"Response Shared Profile",
    "lead_date"=>"Lead Date",
    "lead_follow_up"=>"Lead Follow Up",
    "lead_follow_up_time"=>"Lead Follow Up Time",
    "lead_comment"=>"Lead Comment",
    "lead_shared_id"=>"Lead Shared Id",
    "lead_shortlisted_id"=>"Lead Shortlisted Id",
    "lead_biodata"=>"Lead Biodata",
    "lead_matrimony_picture"=>"Lead Matrimony Picture",
    "meeting_status"=>"Meeting Status",
    "rejection_reason"=>"Rejection Reason",
    "rejection_comments"=>"Rejection Comments",
    "payment_given"=>"Payment Given",
    "payment_remaining"=>"Payment Remaining",
    "next_payment_due_date"=>"Next Payment Due Date",
    "payment_comments"=>"Payment Comments"
    
);

foreach($data as $key => $value) {    
    if (in_array($key, $header)){
        $server_header=$header[$key];
        if(strlen($server_header)>0){
            $server->AddParam($server_header,$data[$key]);    
        }
    }
}

$message1=$server->InsertQuery("tblprofiles");

if($message1["status"]){
    $message["status"]="success";
    $message["message"]="successfully added";
}else{
    $message["status"]="failure";
    $message["message"]=$message1["error"];
    $message["failure"]=$data;
}

    echo json_encode($message);

?>