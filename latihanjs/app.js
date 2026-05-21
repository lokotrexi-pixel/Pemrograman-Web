import student from "./model/student.js";
import bankaccount from "./model/bankaccount.js";

const mhs1 = new student("Johan", 21, "241110024", "Informatika");
mhs1.greet();
mhs1.study();

const rekeningMhs = new bankaccount(mhs1.name);
rekeningMhs.deposit(200000);
rekeningMhs.withdraw(50000);

document.getElementById("output").innerHTML = `
<h2>Data Mahasiswa</h2>
<p><stong>Nama :</stong> ${mhs1.name}</p>
<p><stong>Umur :</stong> ${mhs1.age}</p>
<p><stong>NIM :</stong> ${mhs1.nim}</p>
<p><stong>jurusan :</stong> ${mhs1.major}</p>
<p><strong>Saldo Akhir :</strong>
Rp${rekeningMhs.getBalance().toLocaleString('id-ID') }</p>
`;