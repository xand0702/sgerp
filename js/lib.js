function getActualDate() {
    var date = new Date();
    return (date.getDay().toString().length == 1 ? "0" : "") + date.getDay() + '/' + 
           (date.getMonth().toString().length == 1 ? "0" : "") + date.getMonth() + '/' + date.getFullYear();
}