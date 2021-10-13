window.onload = () => {
    document.getElementsByTagName('input').value = ''
}
function validate() {
    let n1 = document.forms["mainForm"]["date"].value
    let n2 = document.forms["mainForm"]["acname"].value
    let n3 = document.forms["mainForm"]["trans_id"].value
    let n4 = document.forms["mainForm"]["amount"].value
    let n5 = document.forms["mainForm"]["balance"].value

    if (n1 == '' || n2 == '' || n3 == '' || n4 == '' || n5 == '') {
        alert("Please enter value inside the input boxes to proceed")
        return false;
    }
}