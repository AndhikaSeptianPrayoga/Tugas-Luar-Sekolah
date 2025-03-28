![Luar Sekolah](https://www.luarsekolah.com/images/svg/logo.svg)

# Tugas 1: JavaScript

## 📌 Informasi Peserta
- **Nama**: Andhika Septian Prayoga  
- **Okupasi**: Web Development  

---

## 📋 Detail Tugas
Dalam tugas ini, peserta diminta untuk membuat beberapa fungsi JavaScript yang mencakup:
1. **Fungsi untuk manipulasi DOM** (menambahkan elemen, menghapus elemen, atau mengubah konten elemen).
2. **Fungsi untuk validasi formulir** (contoh: validasi email atau input kosong).
3. **Fungsi untuk pengolahan data array atau objek** (contoh: filter, map, atau reduce).
4. **Event handling** untuk interaksi pengguna (contoh: klik tombol, hover, atau input).

Peserta bebas menambahkan fitur lain sesuai kebutuhan.

---

## 🖥️ Source Code JavaScript
```javascript
// Fungsi untuk manipulasi DOM
function tambahElemen() {
    const container = document.getElementById('container');
    const newElement = document.createElement('p');
    newElement.textContent = 'Elemen baru ditambahkan!';
    container.appendChild(newElement);
}

// Fungsi untuk validasi formulir
function validasiForm() {
    const email = document.getElementById('email').value;
    if (!email.includes('@')) {
        alert('Email tidak valid!');
        return false;
    }
    alert('Formulir valid!');
    return true;
}

// Fungsi untuk pengolahan data array
function filterData(data, keyword) {
    return data.filter(item => item.includes(keyword));
}

// Event handling
document.getElementById('btnTambah').addEventListener('click', tambahElemen);
document.getElementById('formKontak').addEventListener('submit', function (event) {
    if (!validasiForm()) {
        event.preventDefault();
    }
});

// Contoh penggunaan fungsi filterData
const data = ['Andi', 'Budi', 'Citra', 'Dewi'];
console.log(filterData(data, 'i')); // Output: ['Andi', 'Citra', 'Dewi']
```

---

## 📸 Screenshot Tampilan JavaScript
![Screenshot Tampilan JavaScript](pp.png)
