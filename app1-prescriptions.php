<?php
/*
Plugin Name:app1PrescriptionsPlugin
Plugin URI:
Description: Добавляет генератор прописей.
Version: 1.0.0
Author: ГШ
Author URI: http://timetoresearch.aleksandrov.space
*/
function app1_prescriptions_sc_instal()
{	
}
register_activation_hook(__FILE__,'app1_prescriptions_sc_instal');

function app1_prescriptions_sc_generator_echo()		/*вывод генератора прописей*/
{echo '<form action="'.plugin_dir_url( __FILE__ ).'generator-for-letter-training-master/gotopdf2.php" method="post">
			<label>Выберите стиль букв</label>
				<label>
				  <input type="radio" name="type_letter_propisi" value=0 checked>
				  Английские обычные
				</label>
				<label>
				  <input type="radio" name="type_letter_propisi" value=1>
				  Английские пунктир
				</label>
			Введите текст прописей: <textarea name="data1"> </textarea></br>
			<input type="submit" value="Создать пропись">
		</form>';
}

add_shortcode( 'app1_prescriptions_generator_echo', 'app1_prescriptions_sc_generator_echo' );

function app1_prescriptions_sc_deactivation()
{
	
}
register_deactivation_hook( __FILE__, 'app1_prescriptions_sc_deactivation' );
?>
