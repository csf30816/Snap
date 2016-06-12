<?PHP
require_once("./include/fg_membersite.php");
$fgmembersite = new FGMembersite();
//Provide your site name here
$fgmembersite->SetWebsiteName('user11.com');
//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('elijahporter@zoho.com');
//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'sql212.my.vg',
                      /*username*/'myvg_18307939',
                      /*password*/'csf30816',
                      /*database name*/'myvg_18307939_login',
                      /*table name*/'fgusers3');
//For better security. Get a random string from this link: http://tinyurl.com/randstr
elC4CDMm5ZkT2Bl
$fgmembersite->SetRandomKey('elC4CDMm5ZkT2Bl');
?>
