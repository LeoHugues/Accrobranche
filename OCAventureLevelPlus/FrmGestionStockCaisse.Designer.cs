namespace OCAventureLevelPlus
{
    partial class FrmGestionStockCaisse
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.bt_products = new System.Windows.Forms.Button();
            this.bt_sale = new System.Windows.Forms.Button();
            this.gd_Products = new System.Windows.Forms.DataGridView();
            ((System.ComponentModel.ISupportInitialize)(this.gd_Products)).BeginInit();
            this.SuspendLayout();
            // 
            // bt_products
            // 
            this.bt_products.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.bt_products.Location = new System.Drawing.Point(12, 43);
            this.bt_products.Name = "bt_products";
            this.bt_products.Size = new System.Drawing.Size(237, 168);
            this.bt_products.TabIndex = 0;
            this.bt_products.Text = "Les Produits";
            this.bt_products.UseVisualStyleBackColor = true;
            // 
            // bt_sale
            // 
            this.bt_sale.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.bt_sale.Location = new System.Drawing.Point(12, 262);
            this.bt_sale.Name = "bt_sale";
            this.bt_sale.Size = new System.Drawing.Size(237, 168);
            this.bt_sale.TabIndex = 2;
            this.bt_sale.Text = "Vente";
            this.bt_sale.UseVisualStyleBackColor = true;
            // 
            // gd_Products
            // 
            this.gd_Products.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.gd_Products.Location = new System.Drawing.Point(280, 43);
            this.gd_Products.Name = "gd_Products";
            this.gd_Products.Size = new System.Drawing.Size(894, 387);
            this.gd_Products.TabIndex = 3;
            // 
            // FrmGestionStockCaisse
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ActiveCaption;
            this.ClientSize = new System.Drawing.Size(1218, 516);
            this.Controls.Add(this.gd_Products);
            this.Controls.Add(this.bt_sale);
            this.Controls.Add(this.bt_products);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.Name = "FrmGestionStockCaisse";
            this.Text = "Gestion de Stock/Caisse";
            ((System.ComponentModel.ISupportInitialize)(this.gd_Products)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button bt_products;
        private System.Windows.Forms.Button bt_sale;
        private System.Windows.Forms.DataGridView gd_Products;
    }
}