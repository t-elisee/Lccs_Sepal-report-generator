var element = document.getElementById('element');
html2pdf(element, {
    margin:       10,
    filename:     'myfile.pdf',

    html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
    jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
  });