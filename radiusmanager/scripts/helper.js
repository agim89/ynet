function SetCheckBoxes(state)
{
	var chbox = form1.elements['list[]'];
	for (var i = 0; i < chbox.length; i++)
	  chbox[i].checked = state;
}

function ToggleCheckBoxes()
{
	if (form1.select.checked == true)
	  var state = true;
	else
	  var state = false;	

	var chbox = form1.elements['list[]'];

	// no one checkbox found
	
	if (typeof chbox == "undefined")
          return;
          
	// only one checkbox found
	
	if (typeof chbox.length == "undefined")
	  chbox.checked = state;
	else
	  for (var i = 0; i < chbox.length; i++)
	    chbox[i].checked = state;
}

function Confirm()
{
      var msg = document.form1.action.options[document.form1.action.selectedIndex].text + "?";

      if ( confirm(msg) )
        document.form1.submit();
      else
	document.form1.action.selectedIndex = 0;
}

function ConfirmMsg(text)
{
  var agree=confirm(text);
  if (agree)
    return true;
  else
    return false;
}

function ToggleExpDate()
{
  var currentTime = new Date();
  var year  = currentTime.getFullYear();
  var month = currentTime.getMonth() + 1;
  var day   = currentTime.getDate();
  
  month = month + '';
  day = day + '';

  if (month.length == 1)
    month = "0" + month;

  if (day.length == 1)
    day = "0" + day;

  if (document.form1.expiration.disabled == false)
  {
    document.form1.expiration.disabled = true;
    document.form1.expiration.value = "";
  }
  else
  {
    document.form1.expiration.disabled = false;
    document.form1.expiration.value = year + "-" + month + "-" + day;
  }
}

function calcCredits()
{
  document.form1.price.value = document.form1.unitprice.value * document.form1.amount.value;
}

function textCounter(field, cntfield, maxlimit)
{
  if (field.value.length > maxlimit)
    field.value = field.value.substring(0, maxlimit);
  else
    cntfield.value = maxlimit - field.value.length;
}

function listbox_selectall(listID, isSelect)
{
  var listbox = document.getElementById(listID);
  for(var count=0; count < listbox.options.length; count++)
    listbox.options[count].selected = isSelect;
}

function ToggleAllColSel(status)
{
  var checkboxes = document.forms['formcolsel'].getElementsByTagName('input');
  for (var i = 0; i < checkboxes.length; i++)
    if (checkboxes[i].type == 'checkbox')
      checkboxes[i].checked = status;
}

function ToggleTable()
{
  if (document.getElementById('colseltab').className == 'hidden')
    document.getElementById('colseltab').className = 'normal';
  else
    document.getElementById('colseltab').className = 'hidden';
}
