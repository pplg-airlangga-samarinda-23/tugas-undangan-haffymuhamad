function openRSVPForm() {
    document.getElementById('rsvp-form').style.display = 'block';
}

function closeRSVPForm() {
    document.getElementById('rsvp-form').style.display = 'none';
}

function submitRSVP() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    
    if (name && email) {
        alert(`Terima kasih, ${name}, telah mengkonfirmasi kehadiran Anda.`);
        closeRSVPForm();
    } else {
        alert('Mohon isi semua kolom.');
    }
}
