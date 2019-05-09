var messageReport = document.getElementById('message_Script_report');
messageReport.addEventListener("click", function()
{
    var alertReport = document.createElement('p');
    
    alertReport.id = 'alert_report';
    alertReport.textContent = 'Le message a bien été signalé';
    document.getElementById('message_forum').appendChild(alertReport);
});
