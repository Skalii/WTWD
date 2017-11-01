function hiding(elemID) {
    if (document.getElementById(elemID).style.display === 'none')
        document.getElementById(elemID).style.display = 'block';
    else document.getElementById(elemID).style.display = 'none';
}