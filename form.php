<?php
class Form {
    private $fields = [];
    private $action;
    private $submit;
    private $jumlahField = 0;

    public function __construct($action, $submit) {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function addField($name, $label) {
        $this->fields[$this->jumlahField]['name']  = $name;
        $this->fields[$this->jumlahField]['label'] = $label;
        $this->jumlahField++;
    }

    public function displayForm() {
        echo "<form action='".$this->action."' method='POST'>";
        echo "<table border='0' width='100%'>";

        foreach ($this->fields as $f) {
            echo "<tr>";
            echo "<td align='right'>".$f['label']."</td>";
            echo "<td><input type='text' name='".$f['name']."'></td>";
            echo "</tr>";
        }

        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='".$this->submit."'>";
        echo "</td></tr>";

        echo "</table></form>";
    }
}
?>
