<?php

declare(strict_types=1);
	class Kennzahlen extends IPSModule
	{
		public function Create()
		{
			//Never delete this line!
			parent::Create();

			$this->RegisterPropertyString('Variables','{}');
			$this->RegisterPropertyString('Formula','');
			$this->RegisterVariableFloat('Result',$this->Translate('Result'), '', 0);
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
			$variablen = json_decode($this->ReadPropertyString('Variables'),true);

			//Referenzen löschen
			foreach ($this->GetReferenceList() as $reference) {
				$this->UnregisterReference($reference);
			}
			//Referenzen hinzufügen & für RegisterMessage registrieren
			foreach ($variablen as $variable) {
				$this->RegisterReference($variable['Variable']);
				$this->RegisterMessage($variable['Variable'], VM_UPDATE);
			}
		}

		public function MessageSink($TimeStamp, $SenderID, $Message, $Data)
		{
			$this->Calculate();
		}

		public function Calculate() {

			$variablen = json_decode($this->ReadPropertyString('Variables'),true);
			$formel = $this->ReadPropertyString('Formula');

			foreach ($variablen as $key => $variable) {
				$value = GetValue($variable['Variable']);
				if (is_float($value)) {
					//$value = str_replace(",",".",$value);
				}
				
				$formel = str_replace($variable['Name'], (string)$value, $formel);
			}
			eval('$Result = '.$formel. ';');
			$this->SetValue('Result',$Result);
		}
	}