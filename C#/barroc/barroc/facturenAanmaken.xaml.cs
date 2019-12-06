using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace barroc
{
    /// <summary>
    /// Interaction logic for facturenAanmaken.xaml
    /// </summary>
    public partial class facturenAanmaken : Window
    {
        public facturenAanmaken()
        {
            InitializeComponent();
        }

        public void nummeronly(TextCompositionEventArgs e)
        {
            e.Handled = new Regex("[^0-9,]").IsMatch(e.Text);
        }

        private void priceTextBox_PreviewTextInput(object sender, TextCompositionEventArgs e)
        {
            nummeronly(e);
        }

        private void sendDataBaseButton_Click(object sender, RoutedEventArgs e)
        {
            string connStr = "server=localhost;user=root;database=barroc_intense;port=3306;password=";
            MySqlConnection conn = new MySqlConnection(connStr);
            conn.Open();

            MySqlCommand cmd = new MySqlCommand("select * from users",conn);
            MySqlDataReader dr = cmd.ExecuteReader();

            dataGrid.ItemsSource = dr;
        }

    }
}
