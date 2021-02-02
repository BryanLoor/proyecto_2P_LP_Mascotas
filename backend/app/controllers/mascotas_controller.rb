class MascotasController < ApplicationController
    before_action :set_mascota, only: [:show, :update, :destroy]

  # GET /mascotas
  def index
    
    @mascotas = Mascota.all
    render json: @mascotas

  end

  # GET /mascotas/1
  def show
    render json: @mascota
  end

  

  # POST /mascotas
  def create
    @mascota = Mascota.new(mascota_params)

    if !@mascota.save
      render json: @mascota.errors, status: :unprocessable_entity
    end
  end

  # PATCH/PUT /adopcions/1
  def update
    if @mascota.update(mascota_params)
      render json: @mascota
    else
      render json: @mascota.errors, status: :unprocessable_entity
    end
  end

  # DELETE /mascotas/1
  def destroy
    @mascota.destroy
  end

  private
    def set_mascota
      @mascota = Mascota.find(params[:id])
    end

    def mascota_params
      params.permit(:especie, :sexo, :edad, :nombre, :descripcion)
    end

end
