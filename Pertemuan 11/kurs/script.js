const inp_valas = document.getElementById('valas');
const inp_nilai = document.getElementById('Nilai');
const inp_rupiah = document.getElementById('rupiah');

const kurs = {
    "usd": 16000,
    "rm": 3000,
    "jpy": 120,
    "eour": 15.888,
    "sar": 3.592,

}

function hitung_kurs() {
    const nilai = document.getElementById('Nilai').value;
    const valas = inp_valas.value;
    console.log(nilai, valas)
    const rupiah = nilai * kurs[valas];
    inp_rupiah.value = rupiah;

}

inp_valas.addEventListener("change",hitung_kurs)
inp_nilai.addEventListener("input",hitung_kurs)