function calcular_preco() {
    var qtd = document.form.qtd.value;
    if (!qtd)
        qtd = '0';
    var valor_unit = document.form.valor_unit.value;
    if (!valor_unit)
        valor_unit = '0';
    var qtd = parseFloat(qtd);
    var valor_unit = parseFloat(valor_unit);
    document.form.valor_total.value = qtd * valor_unit;
}
