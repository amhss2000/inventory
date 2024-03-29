using System;

namespace StockManagement
{
    public partial class StockManagement : System.Web.UI.Page
    {
        protected void updateStock(object sender, EventArgs e)
        {
            int total = Convert.ToInt32(totalQuantity.Text);
            int input = Convert.ToInt32(inputQuantity.Text);

            // Update remaining quantity
            int remaining = total - input;
            remainingQuantity.InnerText = remaining.ToString();

            // Update sizes
            size75.InnerText = (Convert.ToInt32(size75.InnerText) + input).ToString();
            size95.InnerText = (Convert.ToInt32(size95.InnerText) + input).ToString();
            size110.InnerText = (Convert.ToInt32(size110.InnerText) + input).ToString();
        }
    }
}
