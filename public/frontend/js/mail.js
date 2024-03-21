const sendMail = () => {
    var params = {
        from_name: document.getElementById('fullname').value,
        email_id: document.getElementById('email_id').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value,
    }
    emailjs.send("service_iebmevd", "template_do7vftm", params).then((res) => {
        alert("success !" + res.status)
    })
}

const hahaMail = () => {
    console.log('woyyyy')
}