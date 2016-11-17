/*
 * frontend validation
 * */


/*
 * check empty value
 * */

function checkEmpty(value){
    if(value.length == 0){
        return false;
    }
    return true;
}

/*
 * check email validation
 * */

function checkEmail(value){
    var pattern = /[0-9a-z_]+@[0-9a-z_]+\.[a-z]{2,5}/i;
    if(pattern.test(value)){
        return true;
    }
    return false;
}

/*
 * check numbers value
 * */

function checkNumber(value) {
    if(isNaN(value)){
        return false;
    } else if(value < 10){
        return false;
    } else if(value > 90){
        return false;
    }

    return true;
}