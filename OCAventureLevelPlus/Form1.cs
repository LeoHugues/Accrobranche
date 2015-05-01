using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OCAventureLevelPlus
{
    public partial class FrmAccueil : Form
    {
        public FrmAccueil()
        {
            InitializeComponent();
        }

        private void bt_goStock_Click(object sender, EventArgs e)
        {
            FrmGestionStockCaisse frm = new FrmGestionStockCaisse();
            frm.ShowDialog();
        }

        private void bt_goEpi_Click(object sender, EventArgs e)
        {
            FrmGestionepis frm = new FrmGestionepis();
            frm.ShowDialog();
        }
    }
}
