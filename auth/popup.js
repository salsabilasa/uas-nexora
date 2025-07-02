// Data produk per card
const productData = {
  "Custom Skin Minecraft": [
    { name: "Standar", price: "Rp 15.000" },
    { name: "Premium", price: "Rp 25.000" },
    { name: "Couple", price: "Rp 30.000" }
  ],


  "Hosting Server Minecraft": [
    {
      name: "Paket Allium Basic",
      spec: "Ram: 2GB, Disk: 4GB, CPU: 200%",
      price: "Rp 10.000"
    },
    {
      name: "Paket Amethyst Basic",
      spec: "Ram: 4GB, Disk: 6GB, CPU: 300%",
      price: "Rp 20.000"
    },
    {
      name: "Paket Ancient Pro",
      spec: "Ram: 6GB, Disk: 8GB, CPU: 400%",
      price: "Rp 30.000"
    },
    {
      name: "Paket Blast Pro",
      spec: "Ram: 8GB, Disk: 10GB, CPU: 500%",
      price: "Rp 40.000"
    },
    {
      name: "Paket Dragon Pro",
      spec: "Ram: 10GB, Disk: 12GB, CPU: 600%",
      price: "Rp 60.000"
    },
    {
      name: "Paket Heavy Pro",
      spec: "Ram: 12GB, Disk: 14GB, CPU: 700%",
      price: "Rp 80.000"
    },
    {
      name: "Paket Lightning Expert",
      spec: "Ram: 14GB, Disk: 16GB, CPU: 750%",
      price: "Rp 90.000"
    },
    {
      name: "Paket Ominus Expert",
      spec: "Ram: 16GB, Disk: 18GB, CPU: 850%",
      price: "Rp 100.000"
    }
  ],


  "Minecraft Akun": [
    {
      name: "Akun Paket Nexora Elite Java + bedrock + cape + custome skin",
      spec: "",
      price: "Rp 300.000"
    },
    {
      name: "Akun Mimecraft Premium Java & Bedrock",
      spec: "",
      price: "Rp 230.000"
    },
    {
      name: "Akun Paket Minecraft Java Premium + custume skin",
      spec: "",
      price: "Rp 180.000"
    },
    {
      name: "Akun Paket Minecraft Java ",
      spec: "",
      price: "Rp 170.000"
    },
    {
      name: "Akun Minecraft Premium Pojav",
      spec: "",
      price: "Rp 160.000"
    },
    {
      name: "Akun Minecraft Premium Bedrock Windows",
      spec: "",
      price: "Rp 150.000"
    },
  ],


};


//tampilkan dan simpan choose
function openPopup(product) {
  const overlay = document.getElementById("popupOverlay");
  const title = document.getElementById("popupTitle");
  const list = document.getElementById("popupList");


  title.innerText = `Pilih ${product}`;


  // tombol pakai .innerHTML → biar bisa pake <br> 3 baris.
  list.innerHTML = "";


  const items = productData[product];
  if (items) {
    items.forEach(item => {
      const btn = document.createElement("button");
      btn.className = "popup-item";
      btn.innerHTML = `
        <strong>${item.name}</strong><br>
        ${item.spec ? item.spec + "<br>" : ""}
        <strong>${item.price}</strong>
      `;


      btn.onclick = () => {
        // simpan detail ke localStorage
        localStorage.setItem('productName', item.name);
        localStorage.setItem('productSpec', item.spec || "-");
        localStorage.setItem('productPrice', item.price);
        // pindah ke halaman payment
        window.location.href = "payment.html";
      };
      list.appendChild(btn);
    });
  }


  overlay.style.display = "flex";
}


//tutup pop-up
function closePopup() {
  document.getElementById("popupOverlay").style.display = "none";
}



