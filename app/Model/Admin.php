<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Admin Model
 *
 */
class Admin extends AppModel {

	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $passwordHasher = new BlowfishPasswordHasher();
	        $this->data[$this->alias]['password'] = $passwordHasher->hash(
	            $this->data[$this->alias]['password']
	        );
	    }
	    return true;
	}
	public $validate = array(
        'email' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Ingrese un correo electrónico válido.'
            ),
            'validEmailRule' => array(
	            'rule' => array('email'),
	            'message' => 'Correo electrónico invalido.'
	        ),
	        'uniqueEmailRule' => array(
	            'rule' => 'isUnique',
	            'message' => 'El correo electrónico ya existe.'
	        )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Ingrese una contraseña.'
            )
        ),
		're-password' => array(
		    'compare'    => array(
		        'rule'      => array('validate_passwords'),
		        'message' => 'La contraseña ingresada no es la misma.',
		    )
		),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('administrador', 'Super Usuario')),
                'message' => 'Seleccione un Rol.',
                'allowEmpty' => false
            )
        )
    );

    public function validate_passwords() {
	    return $this->data[$this->alias]['password'] === $this->data[$this->alias]['re-password'];
	}
}
