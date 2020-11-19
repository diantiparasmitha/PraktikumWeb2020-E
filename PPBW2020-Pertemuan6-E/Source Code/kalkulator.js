function hasil(){
  var nilai = document.form.tampilan.value;
  if(nilai) {
    document.form.tampilan.value = eval(nilai);
    }
}

function reset(){
  document.form.tampilan.value = "";
}

function hapus(){
  var nilai = document.form.tampilan.value;
  document.form.tampilan.value = nilai.substring(0,nilai.length-1);
}

function masukan(num){
  if (num == 'pangkat') {
    document.form.tampilan.value = Math.pow(document.form.tampilan.value, 2);
  }
  else if (num == '%') {
    document.form.tampilan.value = document.form.tampilan.value/100;
  }
    else {
      document.form.tampilan.value = document.form.tampilan.value+num;
    }
}
