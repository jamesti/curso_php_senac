<h2>Cadastro de Cursos</h2>

<?php echo validation_errors(); ?>

<fieldset>
    <legend>Novo Curso</legend>
    
    <?php echo form_open('curso/novo') ?>
    
    <label>Nome:
        <input type="text" name="nome" value="<?php echo set_value('nome') ?>">
    </label>
    <br><br>
    <label>Descrição:
        <textarea name="descricao"><?php echo set_value('descricao') ?></textarea>
    </label>
    <br><br>
    <label>Valor:
        <input type="number" name="valor" value="<?php echo set_value('valor') ?>">
    </label>
    <br><br>
    <button type="submit">Novo Curso</button>
    
    <?php echo form_close()?>
    
</fieldset>