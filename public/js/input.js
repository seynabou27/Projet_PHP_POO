function handleClick(myRadio) {
    if (myRadio.value==='bourse') {
        document.getElementById('fcb').style.display='block';
        document.getElementById('fca').style.display='none';
    }else if(myRadio.value==='notbourse') {
        document.getElementById('fca').style.display='block';
        document.getElementById('fcb').style.display='none';

    }
}