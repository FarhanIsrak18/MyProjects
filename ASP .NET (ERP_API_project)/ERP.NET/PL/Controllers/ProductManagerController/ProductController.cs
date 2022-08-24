using BLL.Entities;
using BLL.Services.ProductManagerServices;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using System.Web.Http.Cors;

namespace PL.Controllers.ProductManagerController
{
    [EnableCors("*","*","*")]
    public class ProductController : ApiController
    {
        [Route("api/products")]
        [HttpGet]
        public HttpResponseMessage GetAll()
        {
            var data = PorductServices.Get();
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
        
        [Route("api/product/create")]
        [HttpPost]
        public HttpResponseMessage Create(ProductModel product)
        {
            var data = PorductServices.Create(product);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/product/{id}")]
        [HttpGet]
        public HttpResponseMessage Get(int id)
        {
            var data = PorductServices.Get(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/product/delete/{id}")]
        [HttpGet]
        public HttpResponseMessage Delete(int id)
        {
            var data = PorductServices.Delete(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/product/update")]
        [HttpPost]
        public HttpResponseMessage Update(ProductModel product)
        {
            var data = PorductServices.Update(product);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
        
        [Route("api/product/ChartData")]
        [HttpPost]
        public HttpResponseMessage ChartData()
        {
            var data = PorductServices.GetChartData();
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/product/ListedProducts")]
        [HttpGet]
        public HttpResponseMessage ListedProdcuts()
        {
            var data = PorductServices.GetListedProduct();
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
    }
}
