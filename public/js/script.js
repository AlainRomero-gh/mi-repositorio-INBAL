let currentInput = '';

function appendValue(value) {
    currentInput += value;
    document.getElementById('pantalla').value = currentInput;
}

function calcular(result = false) {
    try {
        if (result && currentInput !== '') {
            currentInput = eval(currentInput);
            document.getElementById('pantalla').value = currentInput;
        }
        else if (!result) {
            currentInput = '';
            document.getElementById('pantalla').value = currentInput;
        }
    }catch(e) {
        document.getElementById('pantalla').value = 'Error';
        currentInput = '';
    }
}