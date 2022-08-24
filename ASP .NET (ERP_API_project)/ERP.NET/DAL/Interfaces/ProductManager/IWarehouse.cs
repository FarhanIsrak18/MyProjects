using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.Interfaces.ProductManager
{
    public interface IWarehouse<CLASS, ID>
    {
        CLASS GetByName(ID name);
    }
}
